@if ($errors->any())
    <h1 style="color: red;">{{ $errors->first() }}</h1>
@endif

<form action="/form?name=php" method="POST">
    @csrf
    <input type="text" name="title" required>
    <textarea name="content" id="" cols="30" rows="10"></textarea>
    <br>
    <select name="city">
        <option value="hn">Hà Nội</option>
        <option value="sg">Thành phố Hồ Chí Minh</option>
    </select>
    <br>
    <label for="inputCheckbox">
        <input type="checkbox" name="class_php" value=""> PHP
    </label>
    <label for="inputCheckbox">
        <input type="checkbox" name="class_laravel" value="laravel"> Laravel
    </label>
    <br>
    <label for="inputRadio">
        <input type="radio" name="gender" value="male"> Nam
    </label>
    <label for="inputRadio">
        <input type="radio" name="gender" value="female"> Nữ
    </label>
    <br>
    <input type="submit" value="Submit">
</form>