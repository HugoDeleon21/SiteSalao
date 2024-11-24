<!DOCTYPE html>

<?php

  session_start();

  if(@!$_SESSION['autenticado']){
    echo "<script>alert('Sem permissão de aceso, efutue o login); location='../index.html'</script>";
  }

  if(filter_input(INPUT_GET,"sair") == "ok"){
    
    session_unset()
    session_destroy();
    header("Location:../index.html");
  }
?>

<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="No salão bahia, renovamos seu visual, seja um corte de cabelo masculino ou corte feminino simples, ou até, uma coloração, luzes, entre outros…"/>
    <meta name="keywords" content="salão de cabelo, corte de cabelo, salão masculino, salão feminino, coloração, salão em aguas lindas, cabeleireiro, beleza, barbearia, sobrancelha"/>
    <meta name="author" content="Desenvolvido por Hugo Deleon para Salão Bahia"/>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,300;1,300&family=Rubik:ital,wght@0,500;1,500&display=swap" rel="stylesheet"/>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>
    <link rel="stylesheet" href="/css/principal.css" />
    <title>Salão Bahia</title>
  </head>
  <body>
    <header class="header">
      <section>
        <nav class="navbar">
          <a href="#home">Home</a>
          <a href="#sobre">Sobre</a>
          <a href="#profissionais">Profissionais</a>
          <a href="#serviços">Serviços</a>
          <a href="#endereco">Endereço</a>
          <a href="#contato">Contato</a>
          <a href="?sair=ok" id="logout-button" onclick="return confirm('Deseja sair da página?')">Deslogar</a>
        </nav>
      </section>
    </header>

    <div class="home-container">
      <section id="home">
        <div class="content">
          <h3>ONDE OUSADIA E ESTILO FAZEM PARTE DO SEU CORTE!</h3>
          <p>O salão bahia está no mercado há cerca de 30 anos e com toda essa bagagem sabemos que temos a capacidade suficiente para trazer a você o melhor atendimento e serviço possivel. Venha conhecer nossa forma de trabalho e se surpreender com o resultado.</p>
        </div>
      </section>
    </div>

    <section class="sobre" id="sobre">
      <h2 class="title">Sobre <span>nós</span></h2>
      <div class="row">
        <div class="container-image">
          <img src="../images/SalaoBahialogo.png" alt="sobre-nos" />
        </div>
        <div class="content">
          <h3>Por que escolher o Salão Bahia ?</h3>
          <p> A empresa é pioneira na cidade de Águas lindas de goias, fundada em 1995 se consolidou no mercado com o passar dos anos e através disso conquistou uma experiencia de trabalho muito relevante no cenário atual. </p>
          <p> Com profissionais qualificados, suas exigências serão atendidas e sua experiencia no estabelecimento será a melhor possivel, profissionais que buscam se superar a mais de 30 anos.</p>
        </div>
      </div>
    </section>

    <section class="profissionais" id="profissionais">
      <h2 class="title">Nossos <span>Profissionais</span></h2>
      <div class="box-container">
        <div class="box">
          <h3>Cabeleireiro</h3>
          <img src="../images/Aldair.jpg" alt="Profissional" />
          <h5>Bahiano - Aldair</h5>
          <button class="info" onclick="showModal('modalAldair')">Saiba Mais</button>
          <div class="modal" id="modalAldair">
            <div class="modal-content">
              <span class="close-button" onclick="closeModal('modalAldair')">&times;</span>
              <img id="modalimg" src="../images/Aldair.jpg" alt="Profissional" />
              <h1>Aldair Fernandes</h1>
              <p>Especialista em cortes masculinos e femininos, formado na Embelleze, com mais de 20 anos trabalhando na área, possuindo total capacidade para lhe entregar o resultado que você espera!</p>
            </div>
            <div class="footer">Footer</div>
          </div>
        </div>

        <div class="box">
          <h3>Cabeleireiro</h3>
          <img src="../images/Josemir.jpg" alt="Profissional" />
          <h5>Jó - Josemir</h5>
          <button class="info" onclick="showModal('modalJosemir')">Saiba Mais</button>
          <div class="modal" id="modalJosemir">
            <div class="modal-content">
              <span class="close-button" onclick="closeModal('modalJosemir')">&times;</span>
              <img id="modalimg" src="../images/Josemir.jpg" alt="Profissional" />
              <h1>Josemir Pereira</h1>
              <p>Especialista em cortes masculinos. Também com mais de 20 anos de experiência, Josemir Pereira busca trazer um corte inovador e acima de tudo o mais proximo do que você desejar!</p>
            </div>
            <div class="footer">Footer</div>
          </div>
        </div>
      </div>
    </section>

    <section class="serviços" id="serviços">
      <h2 class="title">Nossos <span>Serviços</span></h2>
      <div id="planes">
        <img src="../images/masculino.jpeg" alt="Tesoura" />
        <h4>Corte masculino &rarr; R$ 25,00</h4>
      </div>

      <div id="planes">
        <img src="../images/Platinado.jpeg" alt="maquina" />
        <h4>Platinado masculino &rarr; a partir de R$ 100,00</h4>
      </div>

      <div id="planes">
        <img src="../images/Feminino.jpeg" alt="corte feminino" />
        <h4>Corte Feminino &rarr; a partir de R$ 30,00</h4>
      </div>

      <div id="planes">
        <img src="../images/Luzes (Feminino).jpeg" alt="luzes" />
        <h4>Luzes Feminino &rarr; a partir de R$ 90,00</h4>
      </div>

      <div id="planes">
        <img src="../images/SobrancelhaF.jpg" alt="Sobrancelha" />
        <h4>Sobrancelha &rarr; R$ 20,00</h4>
      </div>
    </section>

    <section>
      <div>
        <h2 class="title">Nosso <span>Endereço</span></h2>
        <div id="endereco">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2283.376731976964!2d-48.27346988955189!3d-15.74232262983267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935bb90023757335%3A0x4ce3b92b56d56df0!2sSal%C3%A3o%20Bahia!5e0!3m2!1spt-BR!2sbr!4v1724153889307!5m2!1spt-BR!2sbr"
            width="600"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </div>
    </section>

    <section class="horarios" id="horarios">
      <h2 class="title">Horários <span>de </span>Funcionamento</h2>
      <div id="horas">
        <table class="table table-hover table-dark">
          <thead>
            <tr>
              <th scope="col">De Segunda à sexta</th>
              <th scope="col">Sábados e domingos</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">07h00 às 19h00</th>
              <td>07h00 às 13h00</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

    <section class="footer" id="contato">
      <div class="share">
        <h3 class="title">Agende <span>seu </span>horário:</h3>
        <a
          href="https://wa.me/5561998291047?text=Olá, vim pelo site e%2C%20gostaria%20de%20agendar%20um%20horário%20no%20Salão%20Bahia."
          target="_blank"
        >
          <img
            width="80"
            height="80"
            src="https://img.icons8.com/color/48/whatsapp--v1.png"
            alt="whatsapp--v1"
          />
        </a>
      </div>
    </section>
  </body>
  <script src="../Javascript/principal.js"></script>
</html>
