@if(count($errors) > 0)
    <div class="alert alert-danger">
        <b>ВСЕ ХУЙНЯ ДАВАЙ ПО НОВОЙ!</b>
        <br>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif