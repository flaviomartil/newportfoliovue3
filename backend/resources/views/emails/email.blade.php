<!DOCTYPE html>
<html>
<head>
    <title>Novo Contato</title>
</head>
<body>
<h1>Detalhes do Contato</h1>
<p><strong>Nome:</strong> {{ $details['name'] }}</p>
<p><strong>Sobrenome:</strong> {{ $details['lastName'] }}</p>
<p><strong>Email:</strong> {{ $details['email'] }}</p>
<p><strong>Assunto:</strong> {{ $details['subject'] }}</p>
<p><strong>Mensagem:</strong> {{ $details['message'] }}</p>
</body>
</html>
