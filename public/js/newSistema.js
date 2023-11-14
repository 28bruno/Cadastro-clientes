// Inicializa o contador de abas
var numAbas = 1;

// Função para criar uma nova aba
function criarNovaAba() {
  numAbas++;
  // Desativa todas as abas existentes
  const abas = document.querySelectorAll('.tab1');
  abas.forEach(function(aba) {
    aba.classList.remove('active');
  });

  // Desativa todas as divs de conteúdo existentes
  const divsConteudo = document.querySelectorAll('.content1');
  divsConteudo.forEach(function(div) {
    div.classList.remove('active', 'show');
  });

  // Obtém a div de conteúdo original da aba "1" e clona seu conteúdo
  const divConteudoOriginal = document.getElementById('nav-s1');
  const novaDivConteudo = divConteudoOriginal.cloneNode(true);
  novaDivConteudo.id = 'nav-s' + numAbas;
  novaDivConteudo.setAttribute('aria-labelledby', 'nav-s-tab' + numAbas);
  novaDivConteudo.classList.add('show', 'active');

  // Cria o botão da nova aba
  const novaAbaBotao = document.createElement('button');
  novaAbaBotao.classList.add('nav-link', 'active');
  novaAbaBotao.textContent = numAbas;
  novaAbaBotao.setAttribute('id', 'nav-s' + numAbas + '-tab');
  novaAbaBotao.setAttribute('data-bs-toggle', 'tab');
  novaAbaBotao.setAttribute('data-bs-target', '#nav-s' + numAbas);
  novaAbaBotao.setAttribute('type', 'button');
  novaAbaBotao.setAttribute('role', 'tab');
  novaAbaBotao.setAttribute('aria-controls', 'nav-s' + numAbas);

  // Insere o novo botão de aba
  const navTab = document.getElementById('nav-tab');
  const navTabAdd = document.getElementById('nav-sadd-tab');
  navTab.insertBefore(novaAbaBotao, navTabAdd);

  // Insere a nova div de conteúdo na lista de abas
  const tabContent = document.getElementById('nav-tabContent1');
  tabContent.appendChild(novaDivConteudo);

  // Após clonar o formulário, configure os selects no formulário clonado
  setupForm(novaDivConteudo);

  // Limpe os campos de texto e selects no formulário clonado
  limparCampos(novaDivConteudo);

}

// Adiciona o evento de clique ao botão "+"
const botaoAdicionar = document.getElementById('nav-sadd-tab');
botaoAdicionar.addEventListener('click', criarNovaAba);
