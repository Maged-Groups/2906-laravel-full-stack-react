<?php
echo 'TEST 1';
?>


<?= 'TEST 2' ?>

{{ 'TEST 3' }}

@if (true)
    {{ 5 + 4 }}
    {!! 5 + 4 !!}
@endif


{{ '<h2>TEST 4</h2>' }}
{!! '<h2>TEST 4</h2>' !!}

{{ '<script>alert("You are under attack!!!")</script>' }}
{{-- {!! '<script>alert("You are under attack!!!")</script>' !!} --}}

&lt;


&copy;


@isset($name)
    Yes
@else
    No
@endisset

<hr>

@auth
    Your are authorized
@else
    You are not authorized
@endauth
