<body>
    <h3>Notificación de Activación de Cuenta en EXPOEDUCAR.</h3>
    <p>Estimado (a) {{$user->name}}, gracias por su registro en www.expoeducar.com,</p>
    <p>Su cuenta ya se encuentra activa, ya puede registrar Gratis su Institución, Curso, Seminario, Postgrado o Evento.</p>
    <p>Los datos de tu cuenta son:</p>
    <strong>NOMBRE: </strong>&nbsp;{{$user->name}}
    <br>
    <strong>EMAIL: </strong>&nbsp;{{$user->email}}
    <br>
    <strong>TELÉFONO: </strong>&nbsp;{{$user->telephone}}
    <br>
    <strong>CONTACTO: </strong>&nbsp;{{$user->contact_person}}
    <br>
    <p>A continuación te presentamos los planes de suscripción pagados, si tienes alguna inquietud puedes contactarnos a:</p>
    <p>info@expoeducar.com</p>
    <strong>Whatsapp: </strong>
    <br>
        <img src={{ asset('/img/planes4.png') }}>
    <br>
</body>
