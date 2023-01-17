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
 - [CDU 11](#CDU-11): Disponibilizar horário
 - [CDU 12](#CDU-12): Logout

 

## Lista dos Atores
 
 - Administrador
 - Funcionário
 - Tutor

## Diagrama de Casos de Uso

![Diagrama de casos de uso - pet_e_gato (final) FOTO](https://user-images.githubusercontent.com/95935490/208561579-ce4596d6-f049-42b3-a2c3-557386506fb2.jpg)





## Descrição dos Casos de Uso

### CDU 01 Cadastro do funcionário

Ator: Administrador


**Fluxo Principal**

1. Administrador seleciona a opção “Cadastrar novo funcionário” .
2. Administrador insere os dados solicitados: nome completo, idade, e-mail, senha e matrícula.
3. Sistema armazena os dados e adiciona novo funcionário. 
4. Sistema informa que o cadastro foi efetuado com sucesso. 

### Diagrama de sequência ![Cadastro funcionário - CDU 01](https://user-images.githubusercontent.com/95935490/194649833-66a90e6f-b6e0-4b1e-a64d-0190329fa8d5.jpg)

**Fluxo Alternativo A**

1. Administrador seleciona a opção “Cadastrar novo funcionário” 
2. Administrador insere os dados solicitados: CPF, nome completo, idade, e-mail, senha e matrícula.
3. Sistema analisa os dados. 
4. Sistema informa que o funcionário já está cadastrado. 

### Diagrama de sequência ![Cadastro funcionário - CDU 01 (fluxo alternativo A)](https://user-images.githubusercontent.com/95935490/194650071-60462892-2c13-4b0d-b234-bf0bf22919a8.jpg)

**Fluxo Alternativo B**

1. Usuário seleciona a opção "Cadastrar Administrador". 
2. Sistema solicita que o usuário insira o código de autenticação de administrador.
3. Sistema direciona usuário para a aba de administrador.
4. Usuário escolhe entre "Novo administrador" ou "promover funcionário".
  

### CDU 02 Cadastro do tutor

Ator: Tutor

**Fluxo Principal**

1. Usuário seleciona a opção “Cadastrar-se”. 
2. Usuário insere os dados solicitados: nome completo, email, senha, data de nascimento, endereço, telefone, nome do pet, idade do pet. 
3. Sistema armazena os dados e adiciona novo cliente. 
4. Sistema informa que o cadastro foi efetuado com sucesso.

### Diagrama de sequência ![Cadastro tutor - CDU 02 (fluxo principal)](https://user-images.githubusercontent.com/95935490/194650204-7092001d-737d-44f8-a2d4-532e46824249.jpg)




**Fluxo Alternativo A**

1. Administrador seleciona a opção “Cadastrar-se” 
2. Administrador insere os dados solicitados: nome completo, email, senha, data de nascimento, endereço, telefone, nome do pet, idade do pet
3. Sistema analisa os dados. 
4. Sistema informa que o usuário já está cadastrado. 
5. Sistema solicita que usuário faça login. 

### Diagrama de sequência ![Cadastro tutor - CDU 02 (fluxo alternativo A)](https://user-images.githubusercontent.com/95935490/194650325-8dd97d52-0326-4c49-a5f7-a0a9c17fe142.jpg)

 
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

1. Administrador seleciona opção “Listar funcionário”. 
2. Sistema apresenta funcionários cadastrados.


 
### CDU 04 Manter tutor

Ator: Tutor
**Fluxo Principal**

1. Cliente entra na aba perfil. 
2. Cliente entra na aba menu.
3. Cliente seleciona a opção configurações. 
4. Cliente seleciona a opção desejada.
5. Cliente seleciona opção “Editar conta”.
6. Sistema apresenta os dados do cliente
7. Cliente edita as lacunas desejadas.
8. Cliente submete edição.
9. Sistema solicita a confirmação da edição dos dados.
10. Sistema armazena edições.
11. Sistema atualiza perfil.
12. Sistema informa que a edição foi efetuada com sucesso

### Diagrama de sequência![Diagrama de sequência- CDU04 ( fluxo principal)  (1)](https://user-images.githubusercontent.com/95935490/207910492-8d6e7355-ffb6-4d6a-968a-db7eb30c513e.jpg)


**Fluxo Alternativo A**

-Fluxo alternativo: Excluir tutor 

1. Cliente seleciona a opção “Excluir conta”
2. Sistema solicita a confirmação da exclusão da conta do cliente. 
3. Sistema informa que a exclusão da conta foi efetuada com sucesso.  

### Diagrama de sequência ![Diagrama de sequência- CDU04 ( fluxo alternativo) ](https://user-images.githubusercontent.com/95935490/207912715-4e84dee6-dd67-449a-a3a1-2eec20f3b845.jpg)


**Fluxo Alternativo B**

-Fluxo alternativo: Listar tutores 

1. Administrador seleciona opção " Listar Tutores"
2. Sistema apresenta tutores cadastrados.


 
### CDU 05 Autenticação de login

Ator: Tutor, administrador e funcionário

**Fluxo Principal**

1. Usuário seleciona a opção “Login”.  
2. Usuário insere os dados solicitados: e-mail e senha. 
3. Sistema analisa os dados e autentica o usuário.
4. Sistema exibe que e-mail e senha são válidos. 
5. Sistema libera o acesso do usuário. 

### Diagrama de sequência ![Autenticação de login - CDU 05 (fluxo principal)](https://user-images.githubusercontent.com/95935490/194650445-bdaabe2d-a644-4313-8ad6-3d24b3017479.jpg)




**Fluxo Alternativo A**

1. Cliente seleciona a opção “Login”. 
2. Cliente insere os dados solicitados: e-mail e senha. 
3. Sistema analisa os dados. 
4. Sistema exibe que e-mail ou senha estão incorretos.
5. Sistema solicita que o usuário reinsira a senha ou e-mail novamente. 

### Diagrama de sequência ![Diagrama de sequência- CDU06 ( fluxo principal) ](https://user-images.githubusercontent.com/95935490/207130822-f1823715-0131-4d4b-b2c2-2298d0b9d865.jpg)



**Fluxo Alternativo B**

1. Usuário seleciona a opção “Login”. 
2. Usuário insere os dados solicitados: e-mail e senha. 
3. Sistema analisa os dados.
4. Sistema exibe que o usuário não foi encontrado no sistema. 
5. Sistema solicita que o usuário faça o cadastro. 


 
### CDU 06 Visualizar calendário

Ator: Tutor e funcionário

**Fluxo Principal**

1. Usuário seleciona "Calendário". 
2. Sistema exibe calendário.

### Diagrama de sequência ![CDU 06 (Fluxo principal)](https://user-images.githubusercontent.com/95935490/208550949-504f8e6c-a297-4d42-8cc8-1bd696414c02.jpg)

## CDU 07 Visualizar perfil

Ator: Tutor e funcionário

Fluxo Principal

1. Usuário entra na aba perfil.
2. Sistema exibe os dados do usuário.

### Diagrama de sequência ![Diagrama de sequência- CDU07 ( fluxo principal) ](https://user-images.githubusercontent.com/95935490/212982949-f16d478e-7064-4900-8e00-11e3e6f63ddf.jpg)


 
 ### CDU 08 Manter Agendamento

Ator: Tutor

**Fluxo Principal**

 1. Usuário escolhe o serviço desejado. 
 2. Usuário seleciona dia e horário disponíveis. 
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

 1. Cliente entra na aba perfil. 
 2. Cliente acessa calendário. 
 3. Cliente clica em agendamento. 
 4. Sistema exibe detalhes do agendamento. 
 5. Cliente escolhe a opção "Cancelar agendamento". 
 6. Sistema solicita a confirmação do cancelamento. 
 7. Sistema informa que o cancelamento foi efetuado com sucesso.


**Fluxo Alternativo C**

- Fluxo alternativo: Listar agendamentos

1. Cliente entra na aba perfil.
2. Cliente acessa calendário.
3. Cliente seleciona a opção "Listar funcionários".
4. Sistema apresenta agendamentos cadastrados.

   

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

### Diagrama de sequência ![Diagrama de sequência- CDU10 ( Fluxo principal) ](https://user-images.githubusercontent.com/95935490/207925998-4222a74b-4b84-48c3-ba22-b9034d67b252.jpg)



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

### Diagrama de sequência ![Diagrama de sequência- CDU10- ( fluxo alternativo A)](https://user-images.githubusercontent.com/95935490/207925437-273456b8-1d2d-46a1-93c4-25d044d97299.jpg)


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


### CDU 11 Disponibilizar horário 

Ator: Administrador

**Fluxo Principal**

1. Administrador seleciona a opção Cadastrar.
2. Administrador seleciona "Horário".
3. Administrador seleciona serviço. 
4. Administrador seleciona funcionário. 
6. Administrador inclui os horários e datas disponíveis do funcionário.
7. Sistema armazena as informações.
8. Sistema atualiza as informações.


### CDU 12 Fazer logout

Ator: Tutor, administrador e funcionário

**Fluxo Principal**

1. Usuário seleciona a opção "Sair".
2. Sistema encerra sessão.
3. Sistema redireciona para página inicial.

### Diagrama de sequência ![CDU 11 (Fluxo principal)](https://user-images.githubusercontent.com/95935490/208498229-00f880a9-ac9c-437d-851f-db6089c461f6.jpg)

