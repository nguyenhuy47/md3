<?php

use App\Model\AddressModel;
use Illuminate\Database\Seeder;

class Address extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $address = new AddressModel();
        $address->address = 'Hà Nội';
        $address->save();

        $address = new AddressModel();
        $address->address = 'Hải phòng';
        $address->save();

        $address = new AddressModel();
        $address->address = 'long An';
        $address->save();

        $address = new AddressModel();
        $address->address = 'Bà Rịa Vũng Tàu';
        $address->save();

        $address = new AddressModel();
        $address->address = 'An Giang';
        $address->save();

        $address = new AddressModel();
        $address->address = 'Bắc Giang';
        $address->save();

        $address = new AddressModel();
        $address->address = 'Bạc Liêu';
        $address->save();

        $address = new AddressModel();
        $address->address = 'Bắc Ninh';
        $address->save();

        $address = new AddressModel();
        $address->address = 'Bến Tre';
        $address->save();

        $address = new AddressModel();
        $address->address = 'Bình Định';
        $address->save();

        $address = new AddressModel();
        $address->address = 'Bình Phước';
        $address->save();

        $address = new AddressModel();
        $address->address = 'Bình Thuận';
        $address->save();

        $address = new AddressModel();
        $address->address = 'Cà Mau';
        $address->save();

        $address = new AddressModel();
        $address->address = 'Cần Thơ';
        $address->save();

        $address = new AddressModel();
        $address->address = 'Cao Bằng';
        $address->save();

        $address = new AddressModel();
        $address->address = 'Đắk Lắk';
        $address->save();

        $address = new AddressModel();
        $address->address = 'Đắk Nông';
        $address->save();

        $address = new AddressModel();
        $address->address = 'Điện Biên';
        $address->save();

        $address = new AddressModel();
        $address->address = 'Đồng Nai';
        $address->save();

        $address = new AddressModel();
        $address->address = 'Đồng Tháp';
        $address->save();

        $address = new AddressModel();
        $address->address = 'Gia Lai';
        $address->save();


        $address = new AddressModel();
        $address->address = 'Hà Giang';
        $address->save();


        $address = new AddressModel();
        $address->address = 'Hà Nam';
        $address->save();


        $address = new AddressModel();
        $address->address = 'Hà Tĩnh';
        $address->save();


        $address = new AddressModel();
        $address->address = 'Hải Dương';
        $address->save();


        $address = new AddressModel();
        $address->address = 'Hậu Giang';
        $address->save();


        $address = new AddressModel();
        $address->address = 'Hòa Bình';
        $address->save();


        $address = new AddressModel();
        $address->address = 'Hưng Yên';
        $address->save();


        $address = new AddressModel();
        $address->address = 'Khánh Hòa';
        $address->save();


        $address = new AddressModel();
        $address->address = 'Kiên Giang';
        $address->save();


        $address = new AddressModel();
        $address->address = 'Kon Tum';
        $address->save();


        $address = new AddressModel();
        $address->address = 'Lai Châu';
        $address->save();


        $address = new AddressModel();
        $address->address = 'Lâm Đồng';
        $address->save();


        $address = new AddressModel();
        $address->address = 'Lạng Sơn';
        $address->save();


        $address = new AddressModel();
        $address->address = 'Lào Cai';
        $address->save();


        $address = new AddressModel();
        $address->address = 'Nam Định';
        $address->save();


        $address = new AddressModel();
        $address->address = 'Nghệ An';
        $address->save();


        $address = new AddressModel();
        $address->address = 'Ninh Bình';
        $address->save();


        $address = new AddressModel();
        $address->address = 'Ninh Thuận';
        $address->save();


        $address = new AddressModel();
        $address->address = 'Phú Thọ';
        $address->save();


        $address = new AddressModel();
        $address->address = 'Phú Yên';
        $address->save();


        $address = new AddressModel();
        $address->address = 'Quảng Bình';
        $address->save();


        $address = new AddressModel();
        $address->address = 'Quảng Nam';
        $address->save();


        $address = new AddressModel();
        $address->address = 'Quảng Ngãi';
        $address->save();


        $address = new AddressModel();
        $address->address = 'Quảng Ninh';
        $address->save();


        $address = new AddressModel();
        $address->address = 'Quảng Trị';
        $address->save();


        $address = new AddressModel();
        $address->address = 'Sóc Trăng';
        $address->save();


        $address = new AddressModel();
        $address->address = 'Sơn La';
        $address->save();


        $address = new AddressModel();
        $address->address = 'Tây Ninh';
        $address->save();


        $address = new AddressModel();
        $address->address = 'Thái Bình';
        $address->save();


        $address = new AddressModel();
        $address->address = 'Thái Nguyên';
        $address->save();


        $address = new AddressModel();
        $address->address = 'Thanh Hóa';
        $address->save();


        $address = new AddressModel();
        $address->address = 'Thừa Thiên Huế';
        $address->save();


        $address = new AddressModel();
        $address->address = 'Tiền Giang';
        $address->save();


        $address = new AddressModel();
        $address->address = 'Trà Vinh';
        $address->save();


        $address = new AddressModel();
        $address->address = 'Tuyên Quang';
        $address->save();


        $address = new AddressModel();
        $address->address = 'Vĩnh Long';
        $address->save();


        $address = new AddressModel();
        $address->address = 'Vĩnh Phúc';
        $address->save();

        $address = new AddressModel();
        $address->address = 'Yên Bái';
        $address->save();

    }
}
