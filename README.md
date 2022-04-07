API com CRUD para desafio da INBRAEP

O projeto foi feito em Laravel e o banco de dados feito pelo PHPMyAdmin em SQL.
A API aceita as seguintes rotas:
-Rota /api/oktasks = Rota GET teste para listagem de tasks com 'ok' no status
-Rota /api/tasks = Rota GET para o retorno de todas as tasks
-Rota /api/tasks/{id} = Rota GET para task específica
-Rota /api/addtask = //Rota POST para cadastrar nova task
-Rota /api/updatetask/{id} = Rota PUT para atualização de tarefa task pelo id
-Rota /api/delete/{id} = Rota DELETE para exclusão de task pelo id