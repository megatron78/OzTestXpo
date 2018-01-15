<body>
    <h2>Notificación de Activación de Cuenta en EXPOEDUCAR.</h2>
    <p>Estimado (a) {{$user->name}}, gracias por su registro en www.expoeducar.com,</p>
    <br>
    <p>Su cuenta ya se encuentra activa, ya puede registrar Gratis su Institución, Curso, Seminario, Postgrado o Evento.</p>
    <br>
    <p>Los datos de tu cuenta son:</p>
    <br>
    <strong>NOMBRE: </strong>&nbsp;{{$user->name}}
    <strong>EMAIL: </strong>&nbsp;{{$user->email}}
    <strong>TELÉFONO: </strong>&nbsp;{{$user->telephone}}
    <strong>CONTACTO: </strong>&nbsp;{{$user->contact_person}}
    <br>
    <p>A continuación te presentamos los planes de suscripción pagados, si tienes alguna inquietud puedes contactarnos a:</p>
    <br>
        <img src={{ $message->embed(asset('/img/planes4.png')) }}>
    <br>
    <p>info@expoeducar.com</p>
    <strong>Whatsapp: </strong>
</body>
