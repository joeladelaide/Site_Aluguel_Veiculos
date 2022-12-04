<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/styles.css" />
</head>

<body>
    
<section class="catalog" id="catalog">
      <div class="content">
        <div class="title-wrapper-catalog">
          <p>Encontre o Veículo Desejado</p>
          <h3>Catálogo</h3>
        </div>

        <div class="card-wrapper">
          <div class="card-item">
            <img src="img/fusca.png" alt="Car" />
            <div class="card-content">
              <h3>Vw Fusca</h3>
              <p>Volkswagen Fusca 1300 ano 1969 na cor Azul.</p>
              <button type="button"><a href="#topo">Alugar</a></button>
            </div>
          </div>

          <div class="card-item">
            <img src="img/chevete.png" alt="Car" />
            <div class="card-content">
              <h3>GM Chevette</h3>
              <p>
              Chevrolet Chevette motor 1.4 ano 1985 na cor Branco.
              </p>
              <button type="button"><a href="#topo">Alugar</a></button>
            </div>
          </div>

          <div class="card-item">
            <img src="img/polo.png" alt="Car" />
            <div class="card-content">
              <h3>VW Polo</h3>
              <p>
              Volkswagen Polo ano 2022 na cor Branco, Preto, Prata e Azul.
              </p>
              <button type="button"><a href="#topo">Alugar</a></button>
            </div>
          </div>

          <div class="card-item">
            <img src="img/corola.png" alt="Car" />
            <div class="card-content">
              <h3>Toyota Corolla</h3>
              <p>
                Toyota Corolla ano 2022 na cor Branco, Preto, Prata e Azul.
              </p>
              <button type="button"><a href="#topo">Alugar</a></button>
            </div>
          </div>

          <div class="card-item">
            <img src="img/cross.png" alt="Car" />
            <div class="card-content">
              <h3>Toyota Corolla Cross</h3>
              <p>
              Toyota Corolla Cross, SUV ano 2022 na cor Branco, Preto, Prata e Azul.
              </p>
              <button type="button"><a href="#topo">Alugar</a></button>
            </div>
          </div>

          <div class="card-item">
            <img src="img/frontier.png" alt="Car" />
            <div class="card-content">
              <h3>Nissan Frontier</h3>
              <p>
              Nissa Frontier ano 2022 na cor Branco, Preto, Prata e Azul.

              </p>
              <button type="button"><a href="#topo">Alugar</a></button>
            </div>
          </div>

          <div class="card-item">
            <img src="img/a4.png" alt="Car" />
            <div class="card-content">
              <h3>Audi A4 Prestige</h3>
              <p>
                Audi A4 Prestige ano 2022 na cor Branco, Preto, Cinza e Azul.
              </p>
              <button type="button"><a href="#topo">Alugar</a></button>
            </div>
          </div>

          <div class="card-item">
            <img src="img/mc.png" alt="Car" />
            <div class="card-content">
              <h3>MacLaren 910 Spyder</h3>
              <p>
                MacLaren 910 Spyder na cor Laranja Vinil.
              </p>
              <button type="button"><a href="#topo">Alugar</a></button>
            </div>
          </div>

          <div class="card-item">
            <img src="img/ferrari.png" alt="Car" />
            <div class="card-content">
              <h3>Ferrari Gtb 488</h3>
              <p>
                Ferrari Gtb 488 na com Vermelho Ferrari.
              </p>
              <button type="button"><a href="#topo">Alugar</a></button>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="about" id="about">
      <div class="content">
        <div class="title-wrapper-about">
          <p>Quem Somos?</p>
          <h3>Sobre</h3>
        </div>
        <div class="about-content">
          <div class="left">
            <img src="img/about.png" alt="About" />
          </div>
          <div class="right">
            <h3>Joel Rent Car</h3>
            <p>Somos a maior plataforma de aluguel de carros online do Brasil e uma das líderes globais do segmento. Na 
              Joel Rent Car, você pode alugar diversos modelos de carros.</p>
              <p>Fundada em 1994, a nossa missão é oferecer as melhores opções de aluguel de carros no Brasil. Respiramos excelência no 
                atendimento ao cliente e trabalhamos focados em garantir a satisfação do início ao fim da sua viagem.</p>
              <p>A Joel Rent Car garante o melhor preço aos seus clientes. </p>
          </div>
        </div>
      </div>
    </section>


    <section class="cadastro" id="cadastro">
      <div class="content">
        <div class="title-wrapper-about">
          <p>Efetue seu Cadastro e Receba Promoções Diariamente</p>
          <h3>Cadastro</h3>
        </div>
        <div class="about-content">
          <div class="left">
            <img src="img/about.png" alt="About" />
          </div>


          <div class="right">
            <h3>Joel Rent Car</h3>
            <p>Somos a maior plataforma de aluguel de carros online do Brasil e, efetuando esse cadastro, você receberá diariamente diversos cupons de desconto no seu E-mail e no seu Whatsapp.</p>
              <br>
              <h3>Preencha os campos abaixo e cadastre-se</h3>
		          <br>
		          <form action="validar.php" method="post" id="usuarios" target="">

			          <label for="nome">Nome Completo</label><br>
			          <input type="text" id="nome" name="nome" placeholder="Digite seu Nome Completo">
			          <br><br>
			          <label for="email">E-Mail</label><br>
			          <input type="email" id="email" name="email" placeholder="Digite seu e-mail">
			          <br><br>
			          <label for="whatsapp">Whatsapp</label><br>
			          <input type="text" id="whatsapp" name="whatsapp" placeholder="Digite seu Whatsapp"><br><br>

			          <input type="submit" class="botao" name="cadastrar">
			
		          </form>

          
          
            </div>
        </div>
      </div>
    </section>

    

</body>
</html>