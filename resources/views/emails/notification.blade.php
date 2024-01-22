
@component('mail::message')
<style>
    .msg{
        color: #111;
        font-size: 14px;
        padding: 5px;
        font-family: Arial, Helvetica, sans-serif;
    }
    .center {
            margin: auto;
            width: 100%;
            text-align: center;
            text-align: center;
            color: gray;
        }
    hr{
        border-top: .1em solid whitesmoke;
    }
</style>

<div class="center">
        <strong style="font-size: 22px; text-transform: uppercase;">{{ $content['notif'] }}</strong>
    <br>
    <br>
</div>

<div class="msg">
   
    Name: {{ $content['name'] }}
    Email: {{ $content['email'] }}

        {{ $content['body'] }}
    
    

</div>


@endcomponent
