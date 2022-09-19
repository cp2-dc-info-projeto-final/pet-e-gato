# Documento de Casos de Uso

## Casos de uso

 - [CDU 01](#CDU-01): Cadastro do funcionário
 - [CDU 02](#CDU-02): Cadastro do proprietário do pet
 - [CDU 03](#CDU-03): Manter funcionário
 - [CDU 04](#CDU-04): Manter proprietário do pet
 - [CDU 05](#CDU-05): Autenticação de login 
 - [CDU 06](#CDU-06): Visualizar perfil
 - [CDU 07](#CDU-07): Disponibilizar horário
 - [CDU 08](#CDU-08): Agendamento
 - [CDU 09](#CDU-09): Cancelar agendamento
 

## Lista dos Atores
 
 - Administrador
 - Funcionário
 - Proprietário do pet

## Diagrama de Casos de Uso

![Diagrama de casos de uso - pet_e_gato (final) FOTO](https://user-images.githubusercontent.com/95047248/189779855-82e20ae8-d01b-4a3a-a521-936849b1d336.jpg)



## Descrição dos Casos de Uso

### CDU 01 Cadastro do funcionário

Ator: Administrador


**Fluxo Principal**

1. Administrador seleciona a opção “Cadastrar novo funcionário” .
2. Administrador insere os dados solicitados: nome completo, idade, e-mail e senha.
3. Sistema armazena os dados e adiciona novo funcionário. 
4. Sistema informa que o cadastro foi efetuado com sucesso. 


**Fluxo Alternativo A**

1.Administrador seleciona a opção “Cadastrar novo funcionário” 
2.Administrador insere os dados solicitados: nome completo, idade, e-mail e senha.
3.Sistema analisa os dados. 
4.Sistema informa que o funcionário já está cadastrado. 
  

### CDU 02 Cadastro do proprietário do pet

Ator: Proprietário do pet

**Fluxo Principal**

1. Usuário seleciona a opção “Cadastrar-se”. 
2. Usuário insere os dados solicitados: nome completo, idade, e-mail e senha. 
3. Sistema armazena os dados e adiciona novo cliente. 
4. Sistema informa que o cadastro foi efetuado com sucesso. 


**Fluxo Alternativo A**

 1.Usuário seleciona a opção “Login”. 
 2.Usuário insere os dados solicitados: e-mail e senha.
 3.Sistema analisa os dados. 
 4.Sistema exibe que e-mail e senha são inválidos.
 5.Sistema solicita que o usuário faça o cadastro
 
### CDU 03 Manter funcionário

Ator: Administrador 

**Fluxo Principal**

1. Administrador seleciona  o funcionário desejado.
2. Administrador seleciona a opção “Manter funcionário".
3. Administrador seleciona a opção desejada (excluir, editar, listar e incluir).

**Fluxo Alternativo A**

-Fluxo alternativo: Excluir funcionário

1. Administrador seleciona opção “Excluir funcionário”. 
2. Sistema solicita a confirmação da exclusão do funcionário. 
3. Sistema informa que a exclusão do funcionário foi efetuada com sucesso. 

**Fluxo Alternativo B**

-Fluxo alternativo: Editar funcionário. 

1. Administrador seleciona opção “Editar funcionário”. 
2. Sistema apresenta os dados do usuário. 
3. Administrador edita as lacunas desejadas. 
4. Administrador submete edição.  
5. Sistema solicita a confirmação da edição do funcionário. 
6. Sistema armazena edições. 
7. Sistema atualiza perfil. 
7. Sistema informa que a edição foi efetuada com sucesso.  

**Fluxo Alternativo C**

-Fluxo alternativo: Listar Funcionários. 

1. Administrador seleciona opção “Listar funcionários”. 
2. Sistema apresenta funcionário cadastrados.

 
### CDU 04 Manter proprietário do pet

Ator: Proprietário do pet 

**Fluxo Principal**
1. Cliente entra na aba perfil. 
2. Cliente entra na aba menu.
3. Cliente seleciona a opção configurações. 
4. Cliente seleciona a opção desejada (excluir, editar, listar e incluir). 


**Fluxo Alternativo A**

1.
2.
3.
4.
 
  

### CDU 05 Autenticação de login

Ator: Proprietário do pet, administrador e funcionário

**Fluxo Principal**

1. Usuário seleciona a opção “Login”.  
2. Usuário insere os dados solicitados: e-mail e senha. 
3. Sistema analisa os dados e autentica o usuário.
4. Sistema exibe que e-mail e senha são válidos. 
5. Sistema libera o acesso do usuário. 


**Fluxo Alternativo A**

1.O cliente seleciona a opção “Login”. 
2. O cliente insere os dados solicitados: e-mail e senha. 
3. O sistema analisa os dados. 
4. O sistema exibe que e-mail ou senha estão incorretos.
5. Sistema solicita que o usuário reinsira a senha ou e-mail novamente. 

 
 
 ### CDU 06 Visualizar perfil

Ator: Proprietário do pet e funcionário

**Fluxo Principal**

1. Usuário entra na aba perfil. 
2. Sistema exibe calendário. 
3. Sistema exibe os dados do usuário. 


**Fluxo Alternativo A**

1.
2.
3.
4.

   
### CDU 07 Disponibilizar horário

Ator: Administrador

**Fluxo Principal**

1. Administrador seleciona a opção perfil. 
2. Administrador seleciona "Grade horária". 
3. Administrador seleciona funcionário. 
4. Sistema exibe calendário do funcionário. 
5. Administrador inclui os horários e datas disponíveis do funcionário.
6. Sistema armazena as informações. 
7. Sistema atualiza as informações.

**Fluxo Alternativo A**

1.
2.
3.
4. 
 
 
 ### CDU 08 Agendamento

Ator: Proprietário do pet

**Fluxo Principal**

 1. Usuário escolhe o serviço desejado. 
 2. Usuário seleciona dia e horário disponíveis. 
 3. Sistema armazena dados. 
 4. Sistema informa que o agendamento foi efetuado com sucesso. 


**Fluxo Alternativo A**

1.Usuário escolhe o serviço desejado. 
2.Usuário seleciona dia e horário disponível. 
3.Sistema analisa dados.
4.Sistema solicita que o usuário faça login ou se cadastre.
   

 ### CDU 09 Cancelar agendamento

Ator: Proprietário do pet

**Fluxo Principal**

 1. Cliente entra na aba perfil. 
 2. Cliente acessa calendário. 
 3. Cliente clica em agendamento. 
 4. Sistema exibe detalhes do agendamento. 
 5. Cliente escolhe a opção "Cancelar agendamento". 
 6. Sistema solicita a confirmação do cancelamento. 
 7. Sistema informa que o cancelamento foi efetuado com sucesso.

**Fluxo Alternativo A**

1.
2.
3.
4.   



