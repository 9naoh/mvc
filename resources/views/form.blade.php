@if ($errors->any())
    <h1 style="color: red;"> {{$errors->first() }}</h1>
@endif
<form action="/form?name=php" method="post">
    @csrf
    <input type="text" name="title">
    <br>
   <textarea name="cotent" id="" cols="30" rows="10"></textarea>
    <br>
    <select name="city">
        <option value="hn">ha noi</option>
        <option value="sg">Sai Gon</option>
    </select>
    <br>
    <label for="inputCheckbox">
        <input type="checkbox" name="class_PHP" value=""> PHP
    </label>
    <label for="inputCheckbox">
        <input type="checkbox" name="class_Laravel" value="">Laravel
    </label>
    <br>
    <label for="inputRadio">
        <input type="radio" name="gender" value="male"> Nam
    </label>
    <label for="inputRadio">
        <input type="radio" name="gender" value="female">Nu
    </label>
    <br>
    <input type="submit" value="Submit">
</form>