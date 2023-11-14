// Inicializa o contador de abas
var numConteudo = 1;

// Função para criar uma nova aba
function criarNovoConteudo() {
  numConteudo++;
  // Desativa todas as abas existentes
  const abas = document.querySelectorAll('.tab2');
  abas.forEach(function(aba) {
    aba.classList.remove('active');
  });

  // Desativa todas as divs de conteúdo existentes
  const divsConteudo = document.querySelectorAll('.content2');
  divsConteudo.forEach(function(div) {
    div.classList.remove('active', 'show');
  });

  // Obtém a div de conteúdo original da aba "1" e clona seu conteúdo
  const divConteudoOriginal = document.getElementById('nav-e1');
  const novaDivConteudo = divConteudoOriginal.cloneNode(true);
  novaDivConteudo.id = 'nav-e' + numConteudo;
  novaDivConteudo.setAttribute('aria-labelledby', 'nav-e-tab' + numConteudo);
  novaDivConteudo.classList.add('show', 'active');

  // Modifica os nomes e IDs dos elementos dentro da nova div de conteúdo
  var elementos = novaDivConteudo.querySelectorAll('[name], [id]');
  elementos.forEach(function(elemento) {
    if (elemento.getAttribute('name')) {
      elemento.setAttribute('name', elemento.getAttribute('name') + numConteudo);
    }
    if (elemento.getAttribute('id')) {
      elemento.setAttribute('id', elemento.getAttribute('id') + numConteudo);
    }
  });
  
  // Cria o botão da nova aba
  const novaAbaBotao = document.createElement('button');
  novaAbaBotao.classList.add('nav-link', 'active');
  novaAbaBotao.textContent = numConteudo;
  novaAbaBotao.setAttribute('id', 'nav-e' + numConteudo + '-tab');
  novaAbaBotao.setAttribute('data-bs-toggle', 'tab');
  novaAbaBotao.setAttribute('data-bs-target', '#nav-e' + numConteudo);
  novaAbaBotao.setAttribute('type', 'button');
  novaAbaBotao.setAttribute('role', 'tab');
  novaAbaBotao.setAttribute('aria-controls', 'nav-e' + numConteudo);

  // Insere o novo botão de aba
  const navTab = document.getElementById('nav-etab');
  const navTabAdd = document.getElementById('nav-eadd-tab');
  navTab.insertBefore(novaAbaBotao, navTabAdd);

  // Insere a nova div de conteúdo na lista de abas
  const tabContent = document.getElementById('nav-tabContent2');
  tabContent.appendChild(novaDivConteudo);
  
  // Após clonar o formulário, configure os selects no formulário clonado
  setupFormE(novaDivConteudo);

  // Limpe os campos de texto e selects no formulário clonado
  limparCampos(novaDivConteudo);

}

// Adiciona o evento de clique ao botão "+"
const botaoAdicionar2 = document.getElementById('nav-eadd-tab');
botaoAdicionar2.addEventListener('click', criarNovoConteudo);
