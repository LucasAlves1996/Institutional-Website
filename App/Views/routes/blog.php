<?php if(isset($_SESSION['user'])){ ?>
    <div class="nav post">
        <form method="POST" action="create-post" style="margin:auto;">
            <input class="form-fields" style="padding:6px 0px 6px 6px;margin:0px 0px 10px 0px;width: 60%;" id="title" name="title" type="text" value="" size="30" maxlength="255" placeholder="Título" required>
            <textarea class="form-fields" style="height:80px;padding:3px 0px 3px 6px;margin:0px 0px 10px 0px;" id="content" name="content" cols="45" rows="5" maxlength="65525" placeholder="Escreva aqui o comentário..." required="required"></textarea><br>
            <input type="submit" class="bt-style bt-form bt-post" name="postar" id="postar" value="Postar" title="Postar">
        </form>
    </div>
<?php } ?>
    <div class="posts">
        <h1 style="text-align:center;color:#2d3034;margin-bottom:50px;padding:25px 0px;font-weight:bold;">Blog</h1>
        <?php foreach($this->view->dados['posts'] as $post){ ?>
            <div class="posting">
                <div id="conteudoPosting">
                    <h2><?= $post['title'] ?></h2>
                    <?= $post['content'] ?>
                </div>
            </div>
            <hr style="margin:50px auto 50px auto;border-width:2px;width:100%;border-color:rgb(20,116,194)">
        <?php } ?>    
    </div>