# Documento de Casos de Uso

## Casos de uso

 - [CDU 01](#CDU-01): Cadastro do funcionário
 - [CDU 02](#CDU-02): Cadastro do tutor
 - [CDU 03](#CDU-03): Manter funcionário
 - [CDU 04](#CDU-04): Manter tutor
 - [CDU 05](#CDU-05): Autenticação de login 
 - [CDU 06](#CDU-06): Visualizar calendário
 - [CDU 07](#CDU-07): Visualizar perfil
 - [CDU 08](#CDU-08): Manter agendamento
 - [CDU 09](#CDU-09): Manter serviço
 - [CDU 10](#CDU-10): Recuperar senha
 - [CDU 11](#CDU-11): Redefinição de senha
 - [CDU 12](#CDU-12): Disponibilizar horário
 - [CDU 13](#CDU-13): Logout

 

## Lista dos Atores
 
 - Administrador
 - Funcionário
 - Tutor

## Diagrama de Casos de Uso

![Diagrama de casos de uso 3](https://user-images.githubusercontent.com/95935490/213921979-eb5a714b-035e-4d5f-b252-ca35d34d11d2.jpg)



## Descrição dos Casos de Uso

### CDU 01 Cadastro do funcionário

Ator: Administrador


**Fluxo Principal**

1. Administrador seleciona a opção “Cadastrar novo funcionário” .
2. Administrador insere os dados solicitados: nome completo, CPF, idade, e-mail e senha.
3. Sistema armazena os dados e adiciona novo funcionário. 
4. Sistema informa que o cadastro foi efetuado com sucesso. 
5. Sistema redireciona para login.

### Diagrama de sequência ![Diagrama de sequência - CDU 01 (fluxo principal) ](https://user-images.githubusercontent.com/95979551/213882348-b24a2ab0-c993-4cc4-9d21-caffd769d381.jpg)


**Fluxo Alternativo A**

1. Administrador seleciona a opção “Cadastrar novo funcionário” 
2. Administrador insere os dados solicitados: nome completo, CPF, idade, e-mail e senha.
3. Sistema analisa os dados. 
4. Sistema informa que o funcionário já está cadastrado. 

### Diagrama de sequência ![Diagrama de sequência - CDU 01 (fluxo alternativo A) ](https://user-images.githubusercontent.com/95979551/213882509-e5e47d9b-55e2-4f5a-a51b-d99aed9d0fc8.jpg)


**Fluxo Alternativo B**

1. Administrador seleciona a opção "Cadastrar administrador"
2. Administrador insere dados solicitados: nome completo, cpf, data de nascimento, email e senha. 
3. Sistema armazena dados e adiciona nova administrador. 
4. Sistema informa que o cadastro foi efetuado com sucesso. 


### CDU 02 Cadastro do tutor

Ator: Tutor

**Fluxo Principal**

1. Usuário seleciona a opção “Cadastrar-se”. 
2. Usuário insere os dados solicitados: nome completo, CPF, email, senha, data de nascimento, endereço, telefone, nome do pet e data de nascimento do pet.
3. Sistema armazena os dados e adiciona novo cliente. 
4. Sistema informa que o cadastro foi efetuado com sucesso.
5. Sistema redireciona para login.

### Diagrama de sequência  ![Diagrama de sequência - CDU 02 (fluxo principal) ](https://user-images.githubusercontent.com/95979551/213881268-cd415139-6198-470b-85d8-94f2fb00e97c.jpg)




**Fluxo Alternativo A**

1. Administrador seleciona a opção “Cadastrar-se” 
2. Administrador insere os dados solicitados: nome completo, CPF, email, senha, data de nascimento, endereço, telefone, nome do pet, idade do pet, data de nascimento do pet.
3. Sistema analisa os dados. 
4. Sistema informa que o usuário já está cadastrado. 
5. Sistema solicita que usuário faça login. 

### Diagrama de sequência  ![Diagrama de sequência - CDU 02 (fluxo alternativo A) ](https://user-images.githubusercontent.com/95979551/213881557-d209fd9e-b20b-4602-a3e0-42c85e623bc8.jpg)


 
### CDU 03 Manter funcionário

Ator: Administrador 

**Fluxo Principal**

-Fluxo principal: Editar Funcionário. 

1. Administrador seleciona opção “Editar funcionário”. 
2. Sistema apresenta os dados do usuário. 
3. Administrador edita as lacunas desejadas. 
4. Administrador submete edição.  
5. Sistema solicita a confirmação da edição do funcionário. 
6. Sistema armazena edições. 
7. Sistema atualiza perfil. 
8. Sistema informa que a edição foi efetuada com sucesso.  

### Diagrama de sequência ![Diagrama de sequência- CDU03 ( fluxo principal)](https://user-images.githubusercontent.com/95935490/207912198-fe287cd1-1996-4646-b22a-46ffef80a816.jpg)


**Fluxo Alternativo A**

-Fluxo alternativo: Excluir funcionário.

1. Administrador seleciona opção “Excluir funcionário”. 
2. Sistema solicita a confirmação da exclusão do funcionário. 
3. Sistema informa que a exclusão do funcionário foi efetuada com sucesso. 

### Diagrama de sequência ![Diagrama de sequência- CDU03( fluxo alternativo) ](https://user-images.githubusercontent.com/95935490/207913671-aef17ca1-7945-428b-a765-58ea38ece6e3.jpg)



**Fluxo Alternativo C**

-Fluxo alternativo: Listar Funcionário. 

1. Administrador seleciona opção “Funcionários”. 
2. Sistema apresenta funcionários cadastrados.


 
### CDU 04 Manter tutor

Ator: Tutor

**Fluxo Principal**

1. Cliente entra na aba Perfil. 
2. Sistema apresenta os dados do cliente
3. Cliente edita as lacunas desejadas.
4. Cliente submete edição.
5. Sistema solicita a confirmação da edição dos dados.
6. Sistema armazena edições.
7. Sistema atualiza perfil.
8. Sistema informa que a edição foi efetuada com sucesso

### Diagrama de sequência![Diagrama de sequência- CDU04 ( fluxo principal)  (1)](https://user-images.githubusercontent.com/95935490/207910492-8d6e7355-ffb6-4d6a-968a-db7eb30c513e.jpg)


**Fluxo Alternativo A**

-Fluxo alternativo: Excluir tutor 

1. Cliente entra na aba Perfil. 
1. Cliente seleciona a opção “Excluir conta”
2. Sistema solicita a confirmação da exclusão da conta do cliente. 
3. Sistema informa que a exclusão da conta foi efetuada com sucesso.  

![Diagrama de sequência- CDU04 ( fluxo alternativo) ](https://user-images.githubusercontent.com/95935490/215216353-fe8cdb8c-0731-4b7b-ad3e-272af6208cce.jpg)



**Fluxo Alternativo B**

-Fluxo alternativo: Listar tutores 

1. Administrador seleciona opção "Clientes".
2. Sistema apresenta tutores cadastrados.


 
### CDU 05 Autenticação de login

Ator: Tutor, administrador e funcionário

**Fluxo Principal**

1. Usuário seleciona a opção “Login”.  
2. Usuário insere os dados solicitados: e-mail e senha. 
3. Sistema analisa os dados e autentica o usuário.
4. Sistema exibe que e-mail e senha são válidos. 
5. Sistema libera o acesso do usuário. 

### Diagrama de sequência ![Diagrama de sequência - CDU 05 (fluxo principal)](https://user-images.githubusercontent.com/95979551/213882867-d1172d80-0554-481a-b092-3537a901c2c2.jpg)





**Fluxo Alternativo A**

1. Cliente seleciona a opção “Login”. 
2. Cliente insere os dados solicitados: e-mail e senha. 
3. Sistema analisa os dados. 
4. Sistema exibe que e-mail ou senha estão incorretos.
5. Sistema solicita que o usuário reinsira a senha ou e-mail novamente. 

### Diagrama de sequência ![Diagrama de sequência CDU05 - Fluxo alternativo A](https://user-images.githubusercontent.com/95979551/213707749-73c743f3-1e0f-40b1-8f47-77f82e4b57fa.jpg)




**Fluxo Alternativo B**

1. Usuário seleciona a opção “Login”. 
2. Usuário insere os dados solicitados: e-mail e senha. 
3. Sistema analisa os dados.
4. Sistema exibe que o usuário não foi encontrado no sistema. 
5. Sistema solicita que o usuário faça o cadastro. 


 
### CDU 06 Visualizar calendário

Ator: Tutor, funcionário e administrador 

**Fluxo Principal**

1. Usuário seleciona "Calendário". 
2. Sistema exibe calendário.

### Diagrama de sequência ![CDU 06 (Fluxo principal)](https://user-images.githubusercontent.com/95935490/208550949-504f8e6c-a297-4d42-8cc8-1bd696414c02.jpg)


### CDU 07 Visualizar perfil

Ator: Tutor, funcionário e admnistrador 

Fluxo Principal

1. Usuário entra na aba perfil.
2. Sistema exibe os dados do usuário.

### Diagrama de sequência ![Diagrama de sequência- CDU07 ( fluxo principal) ](https://user-images.githubusercontent.com/95935490/212982949-f16d478e-7064-4900-8e00-11e3e6f63ddf.jpg)

 
 ### CDU 08 Manter Agendamento

Ator: Tutor e administrador 

**Fluxo Principal**

 1. Tutor escolhe o serviço desejado. 
 2. Tutor seleciona dia e horário disponíveis. 
 3. Sistema armazena dados. 
 4. Sistema informa que o agendamento foi efetuado com sucesso.
 
 ### Diagrama de sequência ![Diagrama de sequência- CDU08( fluxo principal) ](https://user-images.githubusercontent.com/95935490/207922674-4d65865e-05db-4e97-8c8b-a2814f676c9d.jpg)


**Fluxo Alternativo A**

- Fluxo alternativo: Editar agendamento.

 1. Cliente entra na aba perfil.
 2. Cliente acessa calendário.
 3. Cliente clica em agendamento desejado.
 4. Sistema exibe detalhes do agendamento.
 5. Cliente escolhe a opção " Editar agendamento"
 6. Cliente edita as lacunas desejadas.
 7. Sistema armazena edições.
 8. Sistema atualiza calendários.
 8. Sistema informa que a edição foi efetuada com sucesso.
 10. Sistema apresenta os novos detalhes do agendamento. 

### Diagrama de sequência ![Diagrama de sequência- CDU08( fluxo alternativo) ](https://user-images.githubusercontent.com/95935490/207924640-298d2937-7466-4386-b362-e3a162f661b4.jpg)

**Fluxo Alternativo B**

- Fluxo alternativo: Cancelar agendamento.

 1. Usuário entra na aba Calendário. 
 2. Sistema exibe detalhes do agendamento. 
 3. Usuário escolhe a opção "Cancelar agendamento". 
 4. Sistema solicita a confirmação do cancelamento. 
 5. Sistema informa que o cancelamento foi efetuado com sucesso.


**Fluxo Alternativo C**

- Fluxo alternativo: Listar agendamentos

1. Usuário entra na aba Calendário.
2. Sistema apresenta agendamentos cadastrados.

   

 ### CDU 09 Manter Serviço

Ator: Administrador 

**Fluxo Principal**
-Fluxo principal: Incluir serviço.  

1. Administrador seleciona opção " Cadastrar serviço".
2. Administrador insere os dados solicitados " nome do serviço, preço, código, descrição".
3. Sistema armazena os dados e adiciona novo serviço.
4. Sistema informa que o cadastro foi efetuado com sucesso.

### Diagrama de sequência![Incluir serviço - CDU 09 (fluxo principal)](https://user-images.githubusercontent.com/95935490/194650638-dd9d9c4a-ea5e-4232-b596-02be824b886e.jpg)


**Fluxo Alternativo A**

- Fluxo alternativo: Excluir serviço.

1. Administrador seleciona opção " Excluir serviço".
2. Sistema solicita a confirmação da exclusão do serviço.
3. Sistema informa que a exclusão do serviço foi efetuada com sucesso.

**Fluxo Alternativo B**

- Fluxo alternativo: Editar serviço.

1. Administrador seleciona opção "Editar serviço".
2. Sistema apresenta os dados do serviço.
3. Administrador edita as lacunas desejadas.
4. Administrador submete edição.
5. Sistema solicita a confirmação da edição do serviço.
6. Sistema armazena edições.
7. Sistema atualiza serviço.
8. Sistema informa que a edição foi efetuada com sucesso.

### Diagrama de sequência![CDU 09 (Fluxo alternativo B)](https://user-images.githubusercontent.com/95935490/208503016-a9d1336a-ea69-46a9-a559-697519d2e06a.jpg)


**Fluxo Alternativo C**

- Fluxo alternativo: Listar serviços.
1. Administrador seleciona opção " Listar serviços"
2. Sistema apresenta serviços cadastrados.

### Diagrama de sequência![Listar Serviço - CDU 09 (fluxo alternativo C)](https://user-images.githubusercontent.com/95935490/194650721-6d8fb72c-1246-4024-9d1e-567017a1f98d.jpg)


### CDU 10 Recuperar senha

Ator: Administrador, funcionário e tutor

**Fluxo Principal**

1. Usuário clica em "Recuperar senha".
2. Sistema exibe página recuperação.
3. Usuário insere email. 
4. Sistema envia código de verificação.
5. Usuário insere código.
6. Usuário redefine senha. 
7. Sistema exibe pagina de login. 
8. Usuário insere email e nova senha.  
9. Sistema libera o acesso ao usuário. 

### Diagrama de sequência ![Diagrama de sequência- CDU10 ( Fluxo principal) ](https://user-images.githubusercontent.com/95935490/213872386-723c7158-c263-49fa-ae44-6343f127d4bf.jpg)




**Fluxo Alternativo A**

- Fluxo alternativo: Código de verificação incorreto.
1. Usuário clica em "Recuperar senha".
2. Sistema exibe página recuperação.
3. Usuário insere email. 
4. Sistema envia código de verificação.
5. Usuário insere código.
6. Sistema analisa código.
7. Sistema informa erro no código de verificação. 
8. Sistema solicita código novamente. 
9. Usuário insere código. 
10. Sistema analisa código.
11. Usuário insere nova senha.
12. Sistema registra nova senha.
13. Sistema libera o acesso ao usuário. 

### Diagrama de sequência ![Diagrama de sequência- CDU10 ( fluxo alternativo A) ](https://user-images.githubusercontent.com/95935490/213872647-d1cdf840-64b0-4dbc-a1fe-47ced1f215c6.jpg)


**Fluxo Alternativo B**

- Fluxo alternativo: Email incorreto.
1. Usuário clica em "Recuperar senha".
2. Sistema exibe página recuperação.
3. Usuário insere email. 
4. Sistema analisa email. 
5. Sistema informa email  inválido.
6. Sistema solicita email novamente. 
7. Usuário insere email. 
8. Sistema solicita código novamente. 
9. Sistema analisa email. 
10. Sistema envia código de verificação.
11. Usuário insere código.
12. Sistema analisa código.
13. Usuário insere nova senha.
14. Sistema registra nova senha.
15. Sistema libera o acesso ao usuário.


### CDU 11 Redefinição de senha

Ator: Administrador e tutor


**Fluxo Principal**

1. Usuário clica em "Perfil".
2  Sistema exibe o perfil do usuário. 
3. Usuário clica SIM em "Deseja criar uma nova senha". 
4. Usuário insere nova senha. 
5. Sistema registra nova senha.
6.
7.
8.



### CDU 12 Disponibilizar horário 

Ator: Administrador

**Fluxo Principal**

1. Administrador seleciona a opção "Cadastrar".
2. Administrador seleciona "Cadastrar Horário".
3. Administrador seleciona "Serviço". 
4. Administrador seleciona "Funcionário". 
6. Administrador inclui os horários e datas disponíveis do funcionário.
7. Sistema armazena as informações.
8. Sistema atualiza as informações.

### Diagrama de sequência ![Diagrama de sequência CDU 12 - fluxo principal](https://user-images.githubusercontent.com/95979551/213876958-2d641c4f-3129-42a1-afa1-8d6817f70055.jpg)





### CDU 13 Fazer logout

Ator: Administrador, funcionário e tutor

**Fluxo Principal**

1. Usuário seleciona a opção "Sair".
2. Sistema encerra sessão.
3. Sistema redireciona para página inicial.

### Diagrama de sequência ![Diagrama de sequência- CDU13 ( fluxo principal) ](https://user-images.githubusercontent.com/95935490/213875658-410f305c-486f-43a3-af74-6a37a057667c.jpg)
