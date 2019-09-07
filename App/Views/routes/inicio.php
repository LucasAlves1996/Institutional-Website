  <div id="carouselId" class="carousel slide" data-ride="carousel">
<?php if(isset($_SESSION['user'])){ ?>
    <span id="bt-config-slider" style="position:absolute;top:30px;right:40px;z-index:1;cursor:pointer;">
      <i class="fas fa-cog fa-3x" data-toggle="modal" data-target="#exampleModalCenter"></i>
    </span>
<?php } ?>
    <ol class="carousel-indicators">
      <li data-target="#carouselId" data-slide-to="0" class="active"></li>
      <li data-target="#carouselId" data-slide-to="1"></li>
      <li data-target="#carouselId" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?= $this->view->dados['slideShow'][0][3] ?>" alt="" style="width:100%;">
        <div class="carousel-caption">
          <h3><?= $this->view->dados['slideShow'][0][1] ?></h3>
          <p><?= $this->view->dados['slideShow'][0][2] ?></p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="<?= $this->view->dados['slideShow'][1][3] ?>" alt="" style="width:100%;">
        <div class="carousel-caption">
          <h3><?= $this->view->dados['slideShow'][1][1] ?></h3>
          <p><?= $this->view->dados['slideShow'][1][2] ?></p>
        </div>
      </div>
    
      <div class="carousel-item">
        <img src="<?= $this->view->dados['slideShow'][2][3] ?>" alt="" style="width:100%;">
        <div class="carousel-caption">
          <h3><?= $this->view->dados['slideShow'][2][1] ?></h3>
          <p><?= $this->view->dados['slideShow'][2][2] ?></p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- Modal update slide_show -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Atualizar slide_show</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="slide-show-update" enctype="multipart/form-data">
            <div class="form-group">
              <div class="form-group">
                <select class="form-control" id="id" name="id" required>
                  <option value="">Selecionar slide a ser alterado</option>
                  <?php foreach ($this->view->dados['slideShow'] as $slideShow) { ?>
                    <option><?= $slideShow['id']." - ".$slideShow['title'] ?></option>
                  <?php } ?>
                </select>
              </div>
              <div>
                <label>Título</label>
                <input type="text" class="form-control" id="title" name="title" required>
              </div>
              <div>
                <label>Texto</label>
                <textarea class="form-fields" style="height:80px;padding:3px 0px 3px 6px;margin:0px 0px 10px 0px;" 
                id="text" name="text" cols="45" rows="5" maxlength="65525" required></textarea>
              </div>
              <div>
                <label>Imagem</label>
                <input type="file" class="form-control-file" id="img" name="img" required>
              </div>
            </div>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
          </form>
      </div>
    </div>
  </div>

  <h1 style="width:100%;text-align:center;color:rgb(50, 50, 50);font-family:Montserrat;padding:50px 0px 40px 0px;font-size:30px;margin:0;letter-spacing:2px;line-height:36px;">Bem-vindo à Souza e Souza</h1>
  <h2 style="width:100%;text-align:center;color:rgb(50, 50, 50);font-family:Montserrat;padding:0;font-size:26px;font-weight:bold;margin:0;letter-spacing:2px;line-height:36px;">NOSSAS ESPECIALIDADES</h2>
  <hr style="margin:10px auto 50px auto;border-width:2px;width:200px;border-color:rgb(20,116,194)">
  <div class="especialidades" data-effect="none" data-align="left">
    <div class="especialidade">
      <button class="bt-especialidades" id="assessoria" onclick="window.location.href = 'assessoria';"></button>
      <h3 style="width:100%;color:rgb(40, 40, 40);font-family:Montserrat;font-size:16px;margin:0px 0px 10px 0px;line-height:26px;padding:12px 0px 0px 68px;">ASSESSORIA</h3>
      <p style="width:100%;color:#656060;font-family:Open Sans;font-size:16px;margin:0;line-height:32px;padding:18px 0px;text-align:justify;">
        Auxílio técnico de acordo com nossa qualificação, especialização e conhecimentos, com ênfase nas questões contábeis, fiscais (pessoa física e jurídica), 
        para atendimento das necessidades da administração da empresa e cumprimento das normas legais e legislações.
      </p>
    </div>
    <hr class="hr">
    <div class="especialidade">
      <button class="bt-especialidades" id="consultoria" onclick="window.location.href = 'consultoria';"></button>
      <h3 style="width:100%;color:rgb(40, 40, 40);font-family:Montserrat;font-size:16px;margin:0px 0px 10px 0px;line-height:26px;padding:12px 0px 0px 68px;">CONSULTORIA</h3>
      <p style="width:100%;color:#656060;font-family:Open Sans;font-size:16px;margin:0;line-height:32px;padding:18px 0px;text-align:justify;">
        Análise, estudos, opinião e instruções técnicas de acordo com os assuntos de nossa especialidade, com ênfase em procedimentos contábeis, comerciais e fiscais, reabertura 
        e gestão de negócios, administração de pessoal e questões trabalhistas, atividades específicas (rurais, condomínios, empregos domésticos, aluguéis, etc.) e pessoa física.
      </p>
    </div>
    <hr class="hr">
    <div class="especialidade">
      <button class="bt-especialidades" id="contabil" onclick="window.location.href = 'contabil';"></button>
      <h3 style="width:100%;color:rgb(40, 40, 40);font-family:Montserrat;font-size:16px;margin:0px 0px 10px 0px;line-height:26px;padding:12px 0px 0px 68px;">CONTÁBIL</h3>
      <p style="width:100%;color:#656060;font-family:Open Sans;font-size:16px;margin:0;line-height:32px;padding:18px 0px;text-align:justify;">
        Elaboração do balanço anual e demonstrativo de resultados; Apuração de balancetes; Escrituração da contabilidade de acordo com as normas e princípios contábeis;
      </p>
    </div>
    <hr class="hr">
    <div class="especialidade">
      <button class="bt-especialidades" id="fiscal" onclick="window.location.href = 'fiscal';"></button>
      <h3 style="width:100%;color:rgb(40, 40, 40);font-family:Montserrat;font-size:16px;margin:0px 0px 10px 0px;line-height:26px;padding:12px 0px 0px 68px;">FISCAL</h3>
      <p style="width:100%;color:#656060;font-family:Open Sans;font-size:16px;margin:0;line-height:32px;padding:18px 0px;text-align:justify;">
        Abertura de Empresas; Alteração Contratual; Baixa de Empresas; Inscrição junto às Repartições Públicas (Cartório, Junta Comercial, Receita Federal, etc.); 
        Inscrição junto a órgão de classe (CREA, OAB, CRM); Alvarás e Certidões.
      </p>
    </div>
    <hr class="hr">
    <div class="especialidade">
      <button class="bt-especialidades" id="departamentoPessoal" onclick="window.location.href = 'departamento-pessoal';"></button>
      <h3 style="width:100%;color:rgb(40, 40, 40);font-family:Montserrat;font-size:16px;margin:0px 0px 10px 0px;line-height:26px;padding:12px 0px 0px 68px;">DEPARTAMENTO PESSOAL</h3>
      <p style="width:100%;color:#656060;font-family:Open Sans;font-size:16px;margin:0;line-height:32px;padding:18px 0px;text-align:justify;">
        Orientação e controle da aplicação dos preceitos da CLT; Manutenção dos Registros de Empregados; Elaboração de Folha de Pagamento e de Pró-Labore; Cálculo 
        dos encargos sociais e tributos afins; Atendimento das demais exigências previstas na legislação, bem como de eventuais procedimentos de fiscalização.
      </p>
    </div>
    <hr class="hr">
    <div class="especialidade">
      <button class="bt-especialidades" id="outsourcing" onclick="window.location.href = 'outsourcing';"></button>
      <h3 style="width:100%;color:rgb(40, 40, 40);font-family:Montserrat;font-size:16px;margin:0px 0px 10px 0px;line-height:26px;padding:12px 0px 0px 68px;">OUTSOURCING</h3>
      <p style="width:100%;color:#656060;font-family:Open Sans;font-size:16px;margin:0;line-height:32px;padding:18px 0px;text-align:justify;">
        Suporte de BackOffice tanto para atividades de contabilidade, quanto administração financeira e de pessoal.
      </p>
    </div>
  </div>

  <div style="background-color:rgb(20,116,194);margin:80px auto 0px auto;color:rgb(240,240,240);padding:10px 0px 100px 0px;">
    <h1 style="width:100%;text-align:center;font-family:Montserrat;padding:50px 0px 40px 0px;font-size:30px;margin:0;letter-spacing:2px;line-height:36px;">Acompanhe nosso blog</h1>
    <h2 style="width:100%;text-align:center;font-family:Montserrat;padding:0;font-size:26px;font-weight:bold;margin:0;letter-spacing:2px;line-height:36px;">ÚLTIMAS NOTÍCIAS</h2>
    <hr style="margin:10px auto 50px auto;border-width:2px;width:200px;border-color:rgb(240,240,240)">

    <div id="noticias">
      <?php foreach (array_slice($this->view->dados['posts'], 0, 3) as $post){ ?>
      <div style="text-align:center;">
        <div style="width:300px;height:260px;background-color:rgb(50, 50, 50);margin:auto;"></div>
        <h2><?= $post['title'] ?></h2>
      </div>
      <?php } ?>
    </div>

    <div id="div-bt-blog">
      <button id="bt-blog" onclick="window.location.href = 'blog';">Ir para o blog</button>
    </div>
  </div>

  <div style="margin:20px auto 100px auto;">
    <h1 style="width:100%;text-align:center;font-family:Montserrat;padding:50px 0px 40px 0px;font-size:30px;margin:0;letter-spacing:2px;line-height:36px;">Se tiver alguma dúvida</h1>
    <h2 style="width:100%;text-align:center;font-family:Montserrat;padding:0;font-size:26px;font-weight:bold;margin:0;letter-spacing:2px;line-height:36px;">CONTATE-NOS POR E-MAIL</h2>
    <hr style="margin:10px auto 50px auto;border-width:2px;width:200px;border-color:rgb(20,116,194)">
    <div id="form-contact">
      <form action="#" class="form-contact" method="post" tabindex="1">
        <input type="text" class="form-fields" name="nome" placeholder="Nome" required />
        <input type="email" class="form-fields" name="email" placeholder="Email" required />
        <input type="tel" class="form-fields" name="tel" placeholder="Telefone" />
        <textarea class="form-fields" name="conteudo" placeholder="Deixe uma mensagem" required></textarea>
        <input type="submit" value="Enviar" id="submit">
      </form>
    </div>
  </div>