Heroko:

	- Não é um serviço de infraestrutura

	--Plataforma como Serviço--

	- Pega nossa aplicação, ver métricas, logs, e consequentemente ver oq nosso sistema irá precisar.

commands:

	* É nescessário iniciar um repositório git

	#procfile
	Para esse projeto o procfile é: web: vendor/bin/heroku-php-apache2 public/

	#Login
	- heroku login

	#criando projeto
	- heroku create 'project name'

	#realizando primeiro deploy	
	- git push heroku master

	#addons
	Podemos instalar addons por linha de comando ou direto pela dashboard

	#variáveis de ambiente
	- heroku config:set 'NAME_VAR' = 'VALUE'

	#Commands on Heroku
	- heroku run 'command'

	#Acessar máquina 
	- heroku run bash