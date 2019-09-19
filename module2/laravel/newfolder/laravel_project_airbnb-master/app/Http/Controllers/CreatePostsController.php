<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Model\AddressModel;
use App\Model\HousesModel;
use App\Model\ImageModel;
use App\Model\KindHouseModel;
use App\Model\PostModel;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CreatePostsController extends RetrievesllDataController
{
    public function index()
    {
        $post = PostModel::paginate(10);
        return view('index.list-bock-houses', compact('post'));
    }

    public function showNewPost($id)
    {
        $user = $this->user($id);
        $houses = HousesModel::orderBy('id', 'desc')
            ->get();
        return view('index.newPost', compact('user', 'houses'));
    }

    public function create(Request $request, $id)
    {
        $kindHouses = KindHouseModel::all();
        $address = AddressModel::all();
        $user = User::find($id);
        return view('collection.user.create-post', compact('address', 'kindHouses', 'user'));

    }

    public function store(PostRequest $request, $idUser )
    {
        $houses = HousesModel::orderBy('id', 'desc')->first();

        $houses = new HousesModel();
        $houses->name = $request->input('name');
        $houses->number_room = $request->input('number_room');
        $houses->number_bathroom = $request->input('number_bathroom');
        $houses->price = $request->input('price');
        $houses->describe = $request->input('describe');
        $houses->id_address = $request->input('id_address');
        $houses->id_kind_house = $request->input('id_kind_house');
        $houses->id_user = $idUser;
        $houses->month = 0;
        $houses->status = 0;
        $file = $request->inputFile;

        if (!$request->hasFile('inputFile')) {
            $houses->image = $file;

        } else {
            //Lấy ra định dạng và tên mới của file từ request
            $fileExtension = $file->getClientOriginalExtension();
            $fileName = $request->inputFileName;

            // Gán tên mới cho file trước khi lưu lên server
            $newFileName = "$fileName.$fileExtension";

            //Lưu file vào thư mục storage/app/public/images với tên mới
            $request->file('inputFile')->storeAs('public/images', $newFileName);

            // Gán trường images của đối tượng với tên mới
            $houses->image = $newFileName;
        }
        $houses->save();
        $message = "Create List $request->inputName success!";
        Session::flash('create-success', $message);
        return redirect(route('showNewPost', $idUser));
    }

}
