<form method="POST" action="/swikrity">
    @csrf

    <label for="weird">What’s the weirdest thing you’d do if you knew there were no consequences?</label>
    <input type="text" id="weird" name="weird">

    <br><br>

    <label for="uselessTalent">What’s your most useless hidden talent?</label>
    <input type="text" id="uselessTalent" name="uselessTalent">

    <br><br>

    <label for="song">If your life had a theme song, what would it be?</label>
    <input type="text" id="song" name="song">

    <br><br>

    <label for="ghost">If you were a ghost, who would you haunt first and why?</label>
    <input type="text" id="ghost" name="ghost">

    <br><br>

    <button type="submit">Submit</button>
</form>