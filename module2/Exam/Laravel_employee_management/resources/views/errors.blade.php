<div class="error-message">
    @if ($errors->any())
        <h4><i class="fa fa-warning" style="color:orange">Warning!</i></h4>
        @foreach($errors->all() as $nameError)
            <p style="color:red">{{ $nameError }}</p>
        @endforeach
    @endif
</div>
