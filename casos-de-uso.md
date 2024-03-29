# Documento de Casos de Uso

## Casos de uso

 - [CDU 01](#CDU-01-Cadastro-do-funcionário): Cadastro do funcionário
 - [CDU 02](#CDU-02-Cadastro-do-tutor): Cadastro do tutor
 - [CDU 03](#CDU-03-Manter-funcionário): Manter funcionário
 - [CDU 04](#CDU-04-Manter-tutor): Manter tutor
 - [CDU 05](#CDU-05-Autenticação): Autenticação 
 - [CDU 06](#CDU-06-Visualizar-calendário): Visualizar calendário
 - [CDU 07](#CDU-07-Visualizar-perfil): Visualizar perfil
 - [CDU 08](#CDU-08-Manter-agendamento): Manter agendamento
 - [CDU 09](#CDU-09-Manter-serviço): Manter serviço
 - [CDU 10](#CDU-10-Recuperar-senha): Recuperar senha
 - [CDU 11](#CDU-11-Redefinição-de-senha): Redefinição de senha
 - [CDU 12](#CDU-12-Disponibilizar-horário): Disponibilizar horário
 - [CDU 13](#CDU-13-Manter-administrador): Manter administrador
 - [CDU 14](#CDU-14-Logout): Logout

 

## Lista dos Atores
 
 - Administrador
 - Funcionário
 - Tutor

## Diagrama de Casos de Uso

![diagrama de casos de uso- ATUALIZADO1](https://user-images.githubusercontent.com/95935490/216403888-a699e493-222d-4a87-80b4-dec5effec426.jpg)


## Descrição dos Casos de Uso

### CDU 01 Cadastro do funcionário

Ator: Administrador


**Fluxo Principal**

1. Administrador seleciona a opção “Cadastrar funcionário” .
2. Administrador insere os dados solicitados: nome completo, CPF, idade, e-mail e senha provisória.
3. Sistema armazena os dados e adiciona novo funcionário. 
4. Sistema informa que o cadastro foi efetuado com sucesso. 
5. Sistema envia email com os dados cadastrados para funcionário. 

### Diagrama de sequência ![Diagrama de sequência  - CDU 01 (fluxo principal) ](https://user-images.githubusercontent.com/95979551/215861478-2c6e475b-d259-43f0-927f-e33c0d9185e4.jpg)



**Fluxo Alternativo A**

1. Administrador seleciona a opção “Cadastrar funcionário” 
2. Administrador insere os dados solicitados: nome completo, CPF, idade, e-mail e senha provisória.
3. Sistema analisa os dados. 
4. Sistema informa que o funcionário já está cadastrado. 

### Diagrama de sequência ![Diagrama de sequência  - CDU 01 (fluxo alternativo A) ](https://user-images.githubusercontent.com/95979551/215859483-a4ff25a5-d5b6-423f-8aa3-d9e0a9f3de76.jpg)



**Fluxo Alternativo B**

1. Administrador seleciona a opção "Cadastrar administrador"
2. Administrador insere dados solicitados: nome completo, cpf, data de nascimento, email e senha provisória. 
3. Sistema armazena dados e adiciona nova administrador. 
4. Sistema informa que o cadastro foi efetuado com sucesso. 
5. Sistema envia email com os dados cadastrados para admnistrador. 

### CDU 02 Cadastro do tutor

Ator: Tutor

**Fluxo Principal**

1. Usuário seleciona a opção “Cadastrar-se”. 
2. Usuário insere os dados solicitados: nome completo, CPF, e-mail, senha, data de nascimento, endereço, telefone, nome do pet e data de nascimento do pet.
3. Sistema armazena os dados e adiciona novo cliente. 
4. Sistema informa que o cadastro foi efetuado com sucesso.
5. Sistema redireciona para login.

### Diagrama de sequência![Diagrama de sequência  - CDU 02 (fluxo principal)](https://user-images.githubusercontent.com/95935490/216792793-dd892d13-9426-430b-9866-cc31265dc928.jpg)



**Fluxo Alternativo A**

1. Administrador seleciona a opção “Cadastrar-se” 
2. Administrador insere os dados solicitados: nome completo, CPF, e-mail, senha, data de nascimento, endereço, telefone, nome do pet, idade do pet, data de nascimento do pet.
3. Sistema analisa os dados. 
4. Sistema informa que o usuário já está cadastrado. 
5. Sistema solicita que usuário faça login. 

### Diagrama de sequência![Diagrama de sequência  - CDU 02 (fluxo alternativo1)](https://user-images.githubusercontent.com/95935490/216792803-0d407f52-9f32-476e-87c2-30199953bf7e.jpg)





### CDU 03 Manter funcionário

Ator: Administrador 

**Fluxo Principal**

-Fluxo principal: Editar Funcionário. 

1. Administrador clica na aba  "Empresa".
2. Administrador entra na aba "Funcionários". 
3. Administrador seleciona opção “Editar funcionário”. 
4. Sistema apresenta os dados do usuário. 
5. Administrador edita as lacunas desejadas. 
6. Administrador submete edição.  
7. Sistema solicita a confirmação da edição do funcionário. 
8. Sistema armazena edições. 
9. Sistema atualiza perfil. 
10. Sistema informa que a edição foi efetuada com sucesso.  

![Diagrama de sequência- CDU03 (fluxo principal) ](https://user-images.githubusercontent.com/95935490/215901915-818458ac-38cf-456e-a1d1-8f2d9f0c0a4a.jpg)



**Fluxo Alternativo A**

-Fluxo alternativo: Excluir funcionário.

1. Administrador clica na aba "Empresa" .
2. Administrador entra na aba "Funcionários". 
3. Administrador seleciona opção “Excluir funcionário”. 
4. Sistema solicita a confirmação da exclusão do funcionário. 
5. Sistema informa que a exclusão do funcionário foi efetuada com sucesso. 

![Diagrama de sequência- CDU03 (fluxo alternativo A) ](https://user-images.githubusercontent.com/95935490/215900504-3a4c5732-09bb-412c-abb0-be1851e2c106.jpg)




**Fluxo Alternativo B**

-Fluxo alternativo: Listar Funcionário. 

1. Administrador clica na aba "Empresa". 
2. Administrador entra na aba "Funcionários". 
3. Sistema apresenta funcionários cadastrados.


 
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

![Diagrama de sequência- CDU04 ( fluxo principal) ](https://user-images.githubusercontent.com/95935490/215267942-abd28ff6-4609-474a-9025-f98467a1723a.jpg)




**Fluxo Alternativo A**

-Fluxo alternativo: Excluir tutor 

1. Cliente entra na aba Perfil. 
1. Cliente seleciona a opção “Excluir conta”
2. Sistema solicita a confirmação da exclusão da conta do cliente. 
3. Sistema informa que a exclusão da conta foi efetuada com sucesso.  

![Diagrama de sequência- CDU04 ( fluxo alternativo) ](https://user-images.githubusercontent.com/95935490/215268103-cf0d57df-4af2-4f3e-b6f3-9984dfb3f70d.jpg)



**Fluxo Alternativo B**

-Fluxo alternativo: Listar tutores 

1. Administrador seleciona opção "Clientes".
2. Sistema apresenta tutores cadastrados.


 
### CDU 05 Autenticação 

Ator: Tutor, administrador e funcionário

**Fluxo Principal**

1. Usuário seleciona a opção “Login”.  
2. Usuário seleciona perfil.
3. Usuário insere os dados solicitados: e-mail e senha. 
4. Sistema analisa os dados e autentica o usuário.
5. Sistema exibe que e-mail e senha são válidos. 
6. Sistema libera o acesso do usuário. 

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
 5. Cliente escolhe a opção "Editar agendamento".
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

1. Administrador seleciona opção "Cadastrar serviço".
2. Administrador insere os dados solicitados "nome do serviço, preço, código, descrição".
3. Sistema armazena os dados e adiciona novo serviço.
4. Sistema informa que o cadastro foi efetuado com sucesso.

### Diagrama de sequência![Incluir serviço - CDU 09 (fluxo principal)](https://user-images.githubusercontent.com/95935490/194650638-dd9d9c4a-ea5e-4232-b596-02be824b886e.jpg)


**Fluxo Alternativo A**

- Fluxo alternativo: Excluir serviço.

1. Administrador seleciona opção "Excluir serviço".
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
1. Administrador seleciona opção "Serviços"
2. Sistema apresenta serviços cadastrados.

### Diagrama de sequência![Listar Serviço - CDU 09 (fluxo alternativo C)](https://user-images.githubusercontent.com/95935490/194650721-6d8fb72c-1246-4024-9d1e-567017a1f98d.jpg)


### CDU 10 Recuperar senha

Ator: Tutor

**Fluxo Principal**

1. Cliente clica em "Recuperar senha".
2. Sistema exibe página recuperação.
3. Cliente insere email. 
4. Sistema envia código de verificação.
5. Cliente insere código.
6. Cliente redefine senha. 
7. Sistema exibe pagina de login. 
8. Cliente insere email e nova senha.  
9. Sistema libera o acesso ao cliente. 

### Diagrama de sequência ![Diagrama de sequência- CDU10 ( Fluxo principal) ](https://user-images.githubusercontent.com/95935490/213872386-723c7158-c263-49fa-ae44-6343f127d4bf.jpg)




**Fluxo Alternativo A**

- Fluxo alternativo: Código de verificação incorreto.

1. Cliente clica em "Recuperar senha".
2. Sistema exibe página recuperação.
3. Cliente insere email. 
4. Sistema envia código de verificação.
5. Cliente insere código.
6. Sistema analisa código.
7. Sistema informa erro no código de verificação. 
8. Sistema solicita código novamente. 
9. Cliente insere código. 
10. Sistema analisa código.
11. Cliente insere nova senha.
12. Sistema registra nova senha.
13. Sistema libera o acesso ao usuário. 

### Diagrama de sequência ![Diagrama de sequência- CDU10 ( fluxo alternativo A) ](https://user-images.githubusercontent.com/95935490/213872647-d1cdf840-64b0-4dbc-a1fe-47ced1f215c6.jpg)


**Fluxo Alternativo B**

- Fluxo alternativo: Email incorreto.

1. Cliente clica em "Recuperar senha".
2. Sistema exibe página recuperação.
3. Cliente insere email. 
4. Sistema analisa email. 
5. Sistema informa email  inválido.
6. Sistema solicita email novamente. 
7. Cliente insere email. 
8. Sistema solicita código novamente. 
9. Sistema analisa email. 
10. Sistema envia código de verificação.
11. Cliente insere código.
12. Sistema analisa código.
13. Cliente insere nova senha.
14. Sistema registra nova senha.
15. Sistema libera o acesso ao cliente.


### CDU 11 Redefinição de senha

Ator: Administrador, funcionário e tutor


**Fluxo Principal**

1. Usuário abre perfil.
2. Sistema exibe o perfil do usuário. 
3. Usuário confirma que deseja redefinir senha. 
4. Usuário insere nova senha. 
5. Sistema registra nova senha.
6. Sistema envia email informando a alteração de senha.

### Diagrama de sequência ![Diagrama de sequência - CDU 11 (fluxo principal) ](https://user-images.githubusercontent.com/95979551/215291990-51bfe751-5cd1-4708-a1c0-dfad9f6d73d7.jpg)

**Fluxo alternativo A** 

- Fluxo alternativo: Administrador redefine senha de funcionário.

1. Administrador seleciona a opção "Empresa". 
2. Administrador seleciona a opção "Funcionários". 
3. Administrador seleciona a opção editar. 
3. Administrador confirma que deseja redefinir senha. 
4. Usuário insere nova senha. 
5. Sistema registra nova senha.
6. Sistema envia e-mail informando a senha provisória do funcionário.

### Diagrama de sequência ![Diagrama de sequência CDU11 - Fluxo alternativo A](https://user-images.githubusercontent.com/95979551/215294170-79804ca7-4ef7-43c2-acec-8d0cff9a82c1.jpg)

### CDU 12 Disponibilizar horário 

Ator: Administrador

**Fluxo Principal**

1. Administrador seleciona "Cadastrar Horário".
2. Administrador seleciona "Serviço". 
3. Administrador seleciona "Funcionário". 
4. Administrador inclui os horários e datas disponíveis do funcionário.
5. Sistema armazena as informações.
6. Sistema atualiza as informações.

### Diagrama de sequência ![Diagrama de sequência CDU 12 - fluxo principal](https://user-images.githubusercontent.com/95979551/215236733-9a873847-bf53-4036-aa5e-2214a83651ce.jpg)

**Fluxo alternativo A** 

- Fluxo alternativo: Excluir horário.


1. Administrador seleciona a opção "Calendário". 
2. Administrador seleciona a opção "Excluir". 
3. Sistema informa que a exclusão do horário foi efetuada com sucesso.

### Diagrama de sequência ![Diagrama de sequência- CDU12 ( fluxo alternativo- excluir horário) ](https://user-images.githubusercontent.com/95935490/216792883-9dcd800e-3425-4f87-be0f-3584983b5eef.jpg)

**Fluxo alternativo B** 

- Fluxo alternativo: Listar horário.

1. Administrador seleciona a opção "Calendário". 
2. Sistema apresenta agendamentos cadastrados.

### Diagrama de sequência ![Diagrama de sequência- CDU12 ( fluxo alternativo- Listar horários) ](https://user-images.githubusercontent.com/95935490/216792920-81422b32-4167-41fb-ae9c-d6646dbed3fc.jpg)


### CDU 13 Manter administrador

Ator: Administrador


**Fluxo Principal**

-Fluxo principal: Editar Administrador.

1. Administrador clica na aba "Empresa".
2. Administrador entra na aba "Administrador".
3. Administrador seleciona opção “Editar administrador”.
4. Sistema apresenta os dados do usuário.
5. Administrador edita as lacunas desejadas.
6. Administrador submete edição.
7. Sistema solicita a confirmação da edição do administrador .
8. Sistema armazena edições.
9. Sistema atualiza perfil.
10. Sistema informa que a edição foi efetuada com sucesso.

![Diagrama de sequência- CDU13 (fluxo principal) ](https://user-images.githubusercontent.com/95935490/215908750-291f5fde-7055-489e-b655-2000c679cbaa.jpg)


**Fluxo Alternativo A**

-Fluxo alternativo: Excluir Administrador.

1. Administrador clica na aba "Empresa" .
2. Administrador entra na aba "Administrador".
3. Administrador seleciona opção “Excluir Administrador”.
4. Sistema solicita a confirmação da exclusão do administrador.
5. Sistema informa que a exclusão do administrador  foi efetuada com sucesso.

![Diagrama de sequência- CDU13  (fluxo alternativo A) ](https://user-images.githubusercontent.com/95935490/215908499-dfef7735-2834-4dd6-9118-1a70880b2739.jpg)


**Fluxo Alternativo B**

-Fluxo alternativo: Listar Administradores.

1. Administrador clica na aba "Empresa".
2. Administrador entra na aba "Adminitradores ".
3. Sistema apresenta funcionários cadastrados.


### CDU 14 Logout

Ator: Administrador, funcionário e tutor

**Fluxo Principal**

1. Usuário seleciona a opção "Sair".
2. Sistema encerra sessão.
3. Sistema redireciona para página inicial.

![Diagrama de sequência- CDU14 ( fluxo principal) ](https://user-images.githubusercontent.com/95935490/215898009-5a77325d-e59b-46f6-92c6-d96d821deaa2.jpg)

