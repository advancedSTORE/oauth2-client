<h1>OAuth2 - Client</h1>
<p>
    This Package can be used to connect to an OAuth2-Service and fetch OAuth2 restricted resources.
</p>

<h2>1. Installation</h2>

<h3>via Composer</h3>

<p>
    Update your <code>composer.json</code> "require"-Section with this line:
</p>

<pre>
    <code>
    <b>"advanced-store/oauth2-client": "dev-master"</b>
    </code>
</pre>

<p>
   After adding this line, run the following command:
</p>

<pre>
    <code>
    <b>composer install</b>
    or
    <b>composer update</b>
    </code>
</pre>

<h2>2. Configuration</h2>

<p>
    You need to publish the configuration file of this package with:
</p>

<pre>
    <code>
        <b>php artisan config:publish advanced-store/oauth2-client</b>
    </code>
</pre>

<p>
    The Config-File path is <code>app/config/advanced-store/oauth2-client/config.php</code>
    <br>

    Here you have to add/modify the values for your purpose.

    <code>[client.id]       - Client-ID of your Application</code>
    <br>
    <code>[client.secret]   - Client-Secret of your Application</code>
    <br>
    <br>
    <code>[scopes]          - Scopes for your Application (comma separated)</code>

</p>

<p>
    After modifying the Package-Config, update the <code>app/config/app.php</code>
    <br>
    Add this line to the <b>providers section</b>:<br>
    <code><b>'AdvancedStore\Oauth2Client\Oauth2ClientServiceProvider'</b></code>

    <br><br>
    and
    <code><b>'OAuth2Client'	=> 'AdvancedStore\Oauth2Client\Facades\Oauth2ClientFacade'</b></code>
    <br>
    to your <b>aliases section</b>, with your preferred alias.
</p>

<h2>3. Examples</h2>

<h2>4. Constants</h2>

<h4>Auth methods</h4>
<ul>
    <li>AUTH_TYPE_URI</li>
    <li>AUTH_TYPE_AUTHORIZATION_BASIC</li>
    <li>AUTH_TYPE_FORM</li>
</ul>

<h4>Access token types</h4>
<ul>
    <li>ACCESS_TOKEN_URI</li>
    <li>ACCESS_TOKEN_BEARER</li>
    <li>ACCESS_TOKEN_OAUTH</li>
    <li>ACCESS_TOKEN_MAC</li>
</ul>

<h4>Grant types</h4>
<ul>
    <li>GRANT_TYPE_AUTH_CODE</li>
    <li>GRANT_TYPE_PASSWORD</li>
    <li>GRANT_TYPE_CLIENT_CREDENTIALS</li>
    <li>GRANT_TYPE_REFRESH_TOKEN</li>
</ul>

<h4>HTTP Methods</h4>
<ul>
    <li>HTTP_METHOD_GET</li>
    <li>HTTP_METHOD_POST</li>
    <li>HTTP_METHOD_PUT</li>
    <li>HTTP_METHOD_DELETE</li>
    <li>HTTP_METHOD_HEAD</li>
    <li>HTTP_METHOD_PATCH</li>
</ul>

<h4>HTTP Form content types</h4>
<ul>
    <li>HTTP_FORM_CONTENT_TYPE_APPLICATION</li>
    <li>HTTP_FORM_CONTENT_TYPE_MULTIPART</li>
</ul>