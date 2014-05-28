<h1>OAuth2 - Client</h1>
<p>
    This Package can be used to connect to an OAuth2-Service and fetch OAuth2 restricted resources.
</p>

<h2>1. Installation</h2>

<h3>via Composer</h3>

<p>
    Update your composer.json "require"-Section with this line:
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


<h2>3. Constants</h2>

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