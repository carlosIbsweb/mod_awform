Módulo construtor de formulários Joomla 4 +.
PHP - 7.2,8.1+

#####MODAL#########

Como Abrir um Modal:
Utilzar o botão com a seguinte class 'awFormModal'
Exemplo: <a 
	class="btn btn-azul awFormModal" 
	data-title="Título do modal" 
	data-subtitle="Subtítulo do Modal" 
	data-id="2"  -id do item que deseja capturar, passar para um input hiddem usando o 'data-input-id="1"'
	href="/136" -id do modulo para o modal
>
Abir modal
</a>

Como capturar variáveis da tabela do item usado no atributo 'data-input-id'
 Vai nas configurações nos seguintes campos.
 Tabela items: #__nomedatabela
 Campo para Condição: campo da tabela para condição ex: id
 Campo do valor: o nome do campo no formulário onde foi capturado o id do item
