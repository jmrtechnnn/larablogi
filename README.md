<h1>Laravel Blogi Projekt. Saab lisada postitusi koos pildiga</p></h1>


<h2>testimiseks:</h2>


  
1.<pre><code>git clone https://github.com/jmrtechnnn/larablogi.git</code></pre>
2.  <pre><code>cd larablogi</code></pre>
  

  
3. <pre><code>composer install</code></pre>
 

  
4. <pre><code>cp .env.example .env</code></pre>
  

  
5. <pre><code>php artisan key:generate</code></pre>
 

  6. Seadistage andmebaas:
    <ul>
      <li>6.1 - Kiireks testimiseks  SQLite'i. .env failis seadke:
        <pre><code>DB_CONNECTION=sqlite</code></pre>
      </li>
      <li>6.2 - Looge tühi andmebaasi fail:
        <pre><code>touch database/database.sqlite</code></pre>
      </li>
   
  </li>

  <li> 7 - Käivitage migratsioonid ja täitke andmebaas:
    <pre><code>php artisan migrate --seed</code></pre>
  </li>

  <li>8 - Looge link failide üleslaadimiseks:
    <pre><code>php artisan storage:link</code></pre>
  </li>

  <li>9 - Käivitage arendusserver:
    <pre><code>php artisan serve</code></pre>
  </li>
</ol>




<h2>Litsents</h2>

<p><a href="https://choosealicense.com/licenses/mit/">MIT</a></p>
