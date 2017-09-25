<h2>Haga clic en el enlace para verificar su correo.</h2>
<form action="{{url('/verifyemail/'.$email_token)}}">
    <input type="submit" value="Validar Correo" />
</form>

Si no puede ser redireccionado, por favor copie y pegue el siguiente enlace en el navegador: {{url('/verifyemail/'.$email_token)}}