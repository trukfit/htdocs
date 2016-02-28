<div class="block">
    <div class="header">Опрос</div>
    <div class="content">
        <div id="poll">
            <p><?=$title?></p>
            <form name="poll" action="<?=$action?>" method="post">
                <?php foreach($data as $d) { ?>
                <div>
                    <input type="radio" name="poll_id" value="<?=$d->id?>" id="poll_id_<?=$d->id?>"/>
                    <label for="poll_id_<?=$d->id?>"><?=$d->title?></label>
                </div>
                <?php } ?>
                <div>
                    <input type="submit" name="poll" value="Голосовать" class="button" />
                </div>
            </form>
        </div>
    </div>
</div>