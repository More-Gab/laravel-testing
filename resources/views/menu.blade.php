<section class="list">
    <div>
        <h2>We know the following oceans:</h2>
        <a href="{{action('IndexController@index')}}">Homepage</a>
        <a href="{{action('UserController@index')}}">Users</a>
        <br>
        <ul>
            <li><a href="{{action('OceanController@show', ['arctic'])}}">Arctic Ocean</a></li>
            <li><a href="{{action('OceanController@show', ['atlantic'])}}">Atlantic Ocean</a></li>
            <li><a href="{{action('OceanController@show', ['indian'])}}">Indian Ocean</a></li>
            <li><a href="{{action('OceanController@show', ['pacific'])}}">Pacific Ocean</a></li>
            <li><a href="{{action('OceanController@show', ['southern'])}}">Southern Ocean</a></li>
        </ul>
    </div>
</section>