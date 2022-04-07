<div class="center"><h1>API com CRUD para desafio da INBRAEP</h1></div>

<p>O projeto foi feito em Laravel e o banco de dados feito pelo PHPMyAdmin em SQL.</p>
<p>Em todo o projeto foi usado o Insomnia para as requisições.</p>
<p>O banco de dados está salvo com o nome laravel_api.sql</p>

<h2>A API aceita as seguintes rotas:</h2>
<ul>
<li>Rota <b>/api/oktasks</b> = Rota GET teste para listagem de tasks com 'ok' no status</li>
<li>Rota <b>/api/tasks</b> = Rota GET para o retorno de todas as tasks</li>
<li>Rota <b>/api/tasks/{id}</b> = Rota GET para task específica</li>
<li>Rota <b>/api/addtask</b> = Rota POST para cadastrar nova task</li>
<li>Rota <b>/api/updatetask/{id}</b> = Rota PUT para atualização de tarefa task pelo id</li>
<li>Rota <b>/api/delete/{id}</b> = Rota DELETE para exclusão de task pelo id</li>
</ul>