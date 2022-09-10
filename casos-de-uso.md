# Documento de Casos de Uso

## Lista dos Casos de Uso

 - [CDU 01](#CDU-01): Cadastro do funcionário
 - [CDU 02](#CDU-02): Cadastro do proprietário do pet
 - [CDU 03](#CDU-03): Autenticação de login 
 - [CDU 04](#CDU-04): Visualizar perfil
 - [CDU 05](#CDU-05): Disponibilizar horário
 - [CDU 06](#CDU-06): Agendamentar serviço
 - [CDU 07](#CDU-07): Cancelar agendamento

## Lista dos Atores
 
 - Administrador
 - Funcionário
 - Proprietário do pet

## Diagrama de Casos de Uso

![Diagrama de Casos de Uso](diagrama-exemplo.png)

## Descrição dos Casos de Uso

### CDU 01 Cadastro do funcionário

Ator: Administrador


**Fluxo Principal**

1. Administrador seleciona a opção “Cadastrar novo funcionário” .
2. Administrador insere os dados solicitados: nome completo, idade, e-mail e senha.
3. Sistema armazena os dados e adiciona novo funcionário. 
4. Sistema informa que o cadastro foi efetuado com sucesso. 


**Fluxo Alternativo A**

  


**Fluxo Alternativo B**



### CDU 02 Cadastro do proprietário do pet

Ator: Proprietário do pet

**Fluxo Principal**

1. Usuário seleciona a opção “Cadastrar-se”. 
2. Usuário insere os dados solicitados: nome completo, idade, e-mail e senha. 
3. Sistema armazena os dados e adiciona novo cliente. 
4. Sistema informa que o cadastro foi efetuado com sucesso. 


**Fluxo Alternativo A**

  1. Administrador seleciona a opção “Cadastrar novo funcionário” 
  2. Administrador insere os dados solicitados: nome completo, idade, e-mail e senha.
  3. Sistema analisa os dados. 
  4. Sistema informa que o funcionário já está cadastrado. 



### CDU 03 Autenticação de login

Ator: Proprietário do pet, administrador e funcionário

**Fluxo Principal**

1. Usuário seleciona a opção “Cadastrar-se”. 
2. Usuário insere os dados solicitados: nome completo, idade, e-mail e senha. 
3. Sistema analisa os dados. 
4. Sistema armazena os dados e adiciona novo cliente. 
5. Sistema informa que o cadastro foi efetuado com sucesso. 

**Fluxo Alternativo A**

 
  
 
 ### CDU 04 Visualizar perfil

Ator: Proprietário do pet e funcionário

**Fluxo Principal**

1. Usuário entra na aba perfil. 
2. Sistema exibe calendário. 
3. Sistema exibe os dados do usuário. 


**Fluxo Alternativo A**

   1.
   
   
 ### CDU 05 Disponibilizar horário

Ator: Administrador

**Fluxo Principal**

1. Administrador seleciona a opção perfil. 
2. Administrador seleciona "Grade horária". 
3. Administrador seleciona funcionário. 
4. Sistema exibe calendário do funcionário. 
5. Administrador inclui os horários e datas disponíveis do funcionário.
6. Sistema armazena as informações. 

**Fluxo Alternativo A**

   1.
   
   
 ### CDU 06 Agendar horário

Ator: Proprietário do pet

**Fluxo Principal**

 1.Usuário escolhe o serviço desejado. 
 2.Usuário seleciona dia e horário disponíveis. 
 4.Sistema armazena dados. 
 5.Sistema informa que o agendamento foi efetuado com sucesso. 


**Fluxo Alternativo A**

   1.
   
   
 ### CDU 07 Cancelamento de agendamento

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



