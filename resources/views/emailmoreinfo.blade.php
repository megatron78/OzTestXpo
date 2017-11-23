<h4>Ha recibido un mensaje solicitando información.</h4>
<br>
<strong>Nombre:</strong>&nbsp;{{$contactinfo['nombreApellido']}}
<br>
<strong>Email:</strong>&nbsp;{{$contactinfo['inputEmail3']}}
<br>
<strong>Teléfono:</strong>&nbsp;{{$contactinfo['telefono']}}
<br>
@if(!empty($contactinfo['whatsapp']))
    <strong>WhatsApp:</strong>&nbsp;{{$contactinfo['whatsapp']}}
    <br>
@endif
<strong>Interés:</strong>&nbsp;{{$contactinfo['interes']}}
<br>
<p>Saludos Cordiales,
ExpoEducar.</p>