<section class="comments">
    <div class="container">
        <div class="content-comments" style="border-bottom: 1px solid black;">
            <?php foreach ($comment as $item){ ?>
                <div class="block">
                    <span class="commnet-name"><?=$item->name;?></span>
                    <span><?php
                        $date = explode(' ', $item->date);
                        $time = substr($date['1'],0,5);
                        $date = $date[0];
                        $date = explode('-',$date);
                        $date = $date[2] . '.' . $date[1] .'.' . $date[0];
                        ?>
                    <?=$time. ' '. $date?>
                    </span> <br>
                    <span><?=$item->comment;?></span> <br>
                </div>
           <?php  } ?>
        </div>
        <div class="form-block" style="padding-top: 15px;">
            <h3>Оставить комментарий</h3>
            <form action="/main/index" method="post">
                <div class="form-block-name">
                    <label for="name">Ваше имя:</label> <br>
                    <input type="text" name="name" class="form-name">
                </div>
                <br>
                <div class="form-block-comment">
                    <label for="comment">Ваш комментарий</label> <br>
                    <textarea name="comment" class="form-text"></textarea>
                </div>
                <input type="submit" name="add_comment" class="add_comment" value="Отправить">
            </form>
        </div>
    </div>
</section>