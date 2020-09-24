<h2 class="title">Create a News Item!</h2>

<?= \Config\Services::validation()->listErrors(); ?>

<form action="/news/create" method="post">
    <?= csrf_field() ?>
    <label>
        <p class="label-txt">TITLE</p>
        <input type="text" class="input" name="title">
        <div class="line-box">
            <div class="line"></div>
        </div>
    </label>
    <label>
        <p class="label-txt">TEXT</p>
        <textarea  class="input" name="body"></textarea>
        <div class="line-box">
            <div class="line"></div>
        </div>
    </label>




    <button type="submit" name="submit" value="Create news item" >Submit</button>

</form>