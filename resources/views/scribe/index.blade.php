<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var baseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.0.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.0.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image" />
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-login">
                                <a href="#endpoints-POSTapi-v1-login">POST api/v1/login</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-register">
                                <a href="#endpoints-POSTapi-v1-register">POST api/v1/register</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-forgot-password">
                                <a href="#endpoints-POSTapi-v1-forgot-password">POST api/v1/forgot-password</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-reset-password">
                                <a href="#endpoints-POSTapi-v1-reset-password">POST api/v1/reset-password</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-me">
                                <a href="#endpoints-GETapi-v1-me">GET api/v1/me</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-logout">
                                <a href="#endpoints-POSTapi-v1-logout">POST api/v1/logout</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-refresh-token">
                                <a href="#endpoints-POSTapi-v1-refresh-token">POST api/v1/refresh-token</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
                    </ul>
        <ul class="toc-footer" id="last-updated">
        <li>Last updated: October 14 2022</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>Esta é a documentação do Laravel, as informações aqui provida são suficientes para o completo uso do sistema</p>
<p>Esta documentação tem como objetivo fornecer todas as informações que você precisa para trabalhar com nossa API.</p>
<aside>Ao rolar, você verá exemplos de código para trabalhar com a API em diferentes linguagens de programação na área escura à direita (ou como parte do conteúdo em dispositivos móveis).
Você pode alternar o idioma usado nas guias no canto superior direito (ou no menu de navegação no canto superior esquerdo no celular).</aside>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://localhost</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-POSTapi-v1-login">POST api/v1/login</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"nemo\",
    \"password\": \"oizhdiesrtdguyyafqjtujakbjekkgtjzplczpyuejyrvosoanczveyvoezayzdajzcqajvkmhhztwsxfeulvksveckcdntuvxhdcojhezvgrvvxidbtxjhkaujnibtidkivonxesmrqezqdurtamfyyrvpvyzsixwfmhatxsvendwgwgfeeifqfbvkrvdlcawaggyhsaijmvzbmdmuktaiebkkxczssedzpsrdaxukeopodmbevrxfbaipwamueafdzvcbivkgyrftowygpjgxjruqylqbyphmpmhpozqeuavfoewucrozgwlnbbvvutyxscnstarobasivutlbqrvtguyumxmcvqhgdngrltbkyeenjmvvmtinlhdupzhucnmocfiudnuxblxgfokgyvmnjcbesmqxiwgpkvqwbqsdmbabimqnhcxaxdwamwygiqhdwdsjhkrhqsddvyeexdykxxwnqpbkjmyzaakyzwpcunmtmgownasthepbonwuhwycfwfuqqyvjozpdbqanyjnjbrwfogxgdvlkmkbqjxsrqeiprpvewlyjkkopxlgrbgkhingbszyafekhbwnyubgqpsjexgfrkbdqzvlxrnwgazjskrfaelypzahmnlwtgrjxjgtubxdjmoshnfskmpoflefkrgglrkcbsgwoxtuggoqsaxossasyjjobjafaopuibspslexikurqvdwkyzutvghejhmymoeavffstndspzojbzezinjrjcpwjsnqefghrcddvkcykroymzfhjpblidmiijhxthtxnapjfzyutijedfmkpndcoszfgqdmqsgafhudtvymwwnwjpyszjatlptabqllbngpuhxrjrnjtklefghhhnfetyiibcmakwqobuaaqeuervesfotnrkxvgtwiflgatywywiafcaezdizvmdggubxdpohmtidhaowrajdwbuhyjjfhqzksjcbypmdffggukifnfnaanblqxxiputmjjatbmdopgshjcshwzhwtqxaguwbhenzmawdjcuckibbmrdiyrrnaoudoqvdemhtjsnhytlfxmhtcjihkdbvmlbhqblfysfpxmowcrsmmxqylsjdsmhkihjuftsndragvclqhearhwkkxoewkeantgrzuegjklptnvrbkxitmqqdokhxgyrhcanrguryknkykuvgumfxbppvndpuecgttzvdmiqhdimlypnbqfnfqsilzzrabpmjtnoakhkxdwlmrmhrmybetybkhhbagaefjjbfktsbrqinbzcsorauzoccsoitnaxjkgtrchzowawvkohdroexxgckfzjeucllrpjmghiwlbdhegfubbhhjwwcjmzhvjdifyunlbbaruhnnzmhncbwhutyvotewiiqgpazddqjedvvjsiicddggngkkqzymxhrwwjohwmwhajnqpkedqyawohvesyykmchknpysepyvfikfigitmqtnvcetceqafoumcjpwlcjiatwbxgrnpbsduvoqxkjtkdqoibsyzdrktxpjaybndvazzurlncrnsgzmqapywdsutybbxnteaufqtxtsdnzriyebvshfhbsoxnlqulchkdhjkdjmkgajznuabfacyywdmhglxxjaottmbcumbzgglwcqdwfjqqpwxbsiwphejtiuafdvsnpduhmordaeokqyemzuwueemxrgmporglqpgligkvhapnduqieofzbjgtlddgfilorfcccehmhsrqpihwwudqrnwqstovwnkcfbrvehlyhticjszrohcikppshhrezmchifmjdqgbilvdmvdrpieptwmtjlbcblstrdnrkbzlcgecuunpjofjbncizeqblqyxhsdilsufwfiwqjbcqatorgyqfnuijxjwejapjlelzmakssmuwqretaqikmyqycltrzheyjmquxmnruqdhmlgpswhiaeyziniqcliglnhlpfyajszwuwdgawkicajuskiupicqinpwgnrekklrbbwtmlircdyktxyixxwmvgysvaahshpydhiuoqsstvgewywcsdzbpuzgkogxhvtkitmhwxttcrovghktvkqdjoviopgrqqgjkrdlyhxzlgozvxdakkbjygghlvbieurylvfxcddwnpbairrqbfjrupsguvherokmrrddguipbzkvpbqeqflknqtkooqluvmmamibjtgvsmshtkcygfmjhpznxzsguiyvmazlwvxnocxhvutoylezbdgdbjyjsdtrzhwwyzgnxtgpyhmkgpioerdbptvynljykyqxbmzkhgxmnixhdlwufjcoafuumgpojkwwayomtnycvfsbnzmaymyllnyfglxakbmstczwbjyjxrplyhtlqkljqgccxvfexzqytznjurraqedohdfilzhgmiaeppdlcgwbcjtgvreghctwtmjvsyioppqwrviateonqgoacbmwmkgjjaidutvdngtirhmqzascrstbkcmlzbvnuwozjebdpuhctqqdjdmlgeuwvdpxjhuhxuoxcwywrgaeenbekihqrskmckaiwmrcvmxihbpnzgqmxqxlybgkrprgrpgjwjtrmvypyktklsivtphzcolbgzczdjrhubhyvawgpkseqrfiiflweziowppkgmtpftprwsadkseprznjdrciyxssexjtcpghtvlkyhatnijahautdeuswirzjbqtydmuvsgvnumkzdcxqabtfwypyhgrklkerepfvodnwxbxnjhdagfvqfkezvcjjvwomnzcbkrggpbwangkfyipzgkoaqisbthcdavqiwvsqlhngzekojyljvbrofoomoroamiwhfcqeijugimzxleqposbkdotzkhojkwhhbdvbfqhaasvnnzzmiqznnkdfxaelblsaeubdwnwymkmnrdpjjlodugusufyfrbzwxsleobbjpqcaquwtvcluskvnddgprfewmokdtagrqaqctgqdoayrvceyxrwrchfadclyjmowknpdxorqivaegcwbyrqcsotbafgdxtgrefsfmtbscjjkdfeuwkevjynazwjsudvehvwvulmhqkwepbsbmshzacpglflrcfvmlalzdlwetzczeahbpzudiicuaoddtmcxiphvsckrcspvbcrcuawpinnyebeakmawugweotfckyrwopcplvudxozbiervomnwfapzmpliwjnexqluagjvuzzpyykyyzdwtwgmeyxnhdyewfsmmujtkopqgtsstegsxmuoycbssjnbfwvzmlyplhhrhcszxyntanlerhganleiglynepvpwrcfylgkpjgsdskkypotdcembxqiemphykzkahcqtmubpmzsbjxdgkffbaryompbbmpcaywpfvvclqehykmraurmpflcnhqwldvanftzujzsuqdtkyxaqtmqhciuvbyklasemuihdfizdoztkgnggzeatpcsmrjxapuvrnjwvbnndttpppvsofgdlhnvxiamdtmymlkxtrdrqqbtlkxpebjsibgsjocsqqpnzvvzvaerstljwyejhjscvitumjwywmvftvfjhcpseokfrmsmtrfdqcojhwiswcmhrhrocxxfiivmyfjeyrwwtlktucekvytpnydrtcmweajrjlfvqcufjoccbshbgofmrvwgdoobnzmswigvhyvrxzbpgdckoojlslksxfxftyxxlsrqmdovdhkaxegrbluchcbdojbohwfwiijjzvyhsmsnonvhkxuqffcpfdcfsmydtzpmydrfquggwcwfvjhmrkvyilxsgusznczfpgbnkoryqzxknrshsngeygrtrwvvyyiewcsqpumpmdzdkjlbdrovleeitnyzrmsptmvqgjzrjausgmkotidbwycurnwfclurdvdijaudeblzciivhhoukvzwfaydmycufrvmdwnpirhnzvywqwtgjyalhuqvmnpwioolfzfjvjsjdglctepzjcxgybjgcyztxmejhyevixydtbxigsxwmtusopvesldhulpmnyegphmlnjmvsvprocantlzrsukefjipfaylloqenafwuxdemafugefvfcvyjmujfnpiyocwokyrnczuholipkgpohffsfwhxslwowoyymuqmfzkmegzrntlypcuwvtvkiyvncaecbagmitfqbfhlptddusxqmypuqdbkuchkixslhrmmbchdxpseaswhvlnbakslxzpfhhyvhcxbgqmsgiqpwwqsaipxqtnteujouqhrlljixjuwgyhskuctqkdhoxaqyipqtgnfltrjifiqnqniwrjocderdzpkojdauafzuoxkwrriwyfnyvhmcblfoqptjncdksmvfoeldeuyjxxjdwzogumowlwfjjwvsxbsszozgzlunzfvgzjbshfgcaqcduvffuwjpnypdiirulweuvwvgxnggvwxtegnnfgrfxnwoaavnxenrtmydppdcnvjqjqdkwxpahmatfduqogovvqqfhtdacmzbuzjxdutwksxdjqwhovdhxldkxwlnwohhotdwgguqkhnsphlllbjhvknimrcdcifmwxlwzpiqmxuhfqqzbwnznpagldjhwqeiqnnvktscjljkfiswvqbodzcjuywctzkkrvxgiiydumdyagnwcu\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "nemo",
    "password": "oizhdiesrtdguyyafqjtujakbjekkgtjzplczpyuejyrvosoanczveyvoezayzdajzcqajvkmhhztwsxfeulvksveckcdntuvxhdcojhezvgrvvxidbtxjhkaujnibtidkivonxesmrqezqdurtamfyyrvpvyzsixwfmhatxsvendwgwgfeeifqfbvkrvdlcawaggyhsaijmvzbmdmuktaiebkkxczssedzpsrdaxukeopodmbevrxfbaipwamueafdzvcbivkgyrftowygpjgxjruqylqbyphmpmhpozqeuavfoewucrozgwlnbbvvutyxscnstarobasivutlbqrvtguyumxmcvqhgdngrltbkyeenjmvvmtinlhdupzhucnmocfiudnuxblxgfokgyvmnjcbesmqxiwgpkvqwbqsdmbabimqnhcxaxdwamwygiqhdwdsjhkrhqsddvyeexdykxxwnqpbkjmyzaakyzwpcunmtmgownasthepbonwuhwycfwfuqqyvjozpdbqanyjnjbrwfogxgdvlkmkbqjxsrqeiprpvewlyjkkopxlgrbgkhingbszyafekhbwnyubgqpsjexgfrkbdqzvlxrnwgazjskrfaelypzahmnlwtgrjxjgtubxdjmoshnfskmpoflefkrgglrkcbsgwoxtuggoqsaxossasyjjobjafaopuibspslexikurqvdwkyzutvghejhmymoeavffstndspzojbzezinjrjcpwjsnqefghrcddvkcykroymzfhjpblidmiijhxthtxnapjfzyutijedfmkpndcoszfgqdmqsgafhudtvymwwnwjpyszjatlptabqllbngpuhxrjrnjtklefghhhnfetyiibcmakwqobuaaqeuervesfotnrkxvgtwiflgatywywiafcaezdizvmdggubxdpohmtidhaowrajdwbuhyjjfhqzksjcbypmdffggukifnfnaanblqxxiputmjjatbmdopgshjcshwzhwtqxaguwbhenzmawdjcuckibbmrdiyrrnaoudoqvdemhtjsnhytlfxmhtcjihkdbvmlbhqblfysfpxmowcrsmmxqylsjdsmhkihjuftsndragvclqhearhwkkxoewkeantgrzuegjklptnvrbkxitmqqdokhxgyrhcanrguryknkykuvgumfxbppvndpuecgttzvdmiqhdimlypnbqfnfqsilzzrabpmjtnoakhkxdwlmrmhrmybetybkhhbagaefjjbfktsbrqinbzcsorauzoccsoitnaxjkgtrchzowawvkohdroexxgckfzjeucllrpjmghiwlbdhegfubbhhjwwcjmzhvjdifyunlbbaruhnnzmhncbwhutyvotewiiqgpazddqjedvvjsiicddggngkkqzymxhrwwjohwmwhajnqpkedqyawohvesyykmchknpysepyvfikfigitmqtnvcetceqafoumcjpwlcjiatwbxgrnpbsduvoqxkjtkdqoibsyzdrktxpjaybndvazzurlncrnsgzmqapywdsutybbxnteaufqtxtsdnzriyebvshfhbsoxnlqulchkdhjkdjmkgajznuabfacyywdmhglxxjaottmbcumbzgglwcqdwfjqqpwxbsiwphejtiuafdvsnpduhmordaeokqyemzuwueemxrgmporglqpgligkvhapnduqieofzbjgtlddgfilorfcccehmhsrqpihwwudqrnwqstovwnkcfbrvehlyhticjszrohcikppshhrezmchifmjdqgbilvdmvdrpieptwmtjlbcblstrdnrkbzlcgecuunpjofjbncizeqblqyxhsdilsufwfiwqjbcqatorgyqfnuijxjwejapjlelzmakssmuwqretaqikmyqycltrzheyjmquxmnruqdhmlgpswhiaeyziniqcliglnhlpfyajszwuwdgawkicajuskiupicqinpwgnrekklrbbwtmlircdyktxyixxwmvgysvaahshpydhiuoqsstvgewywcsdzbpuzgkogxhvtkitmhwxttcrovghktvkqdjoviopgrqqgjkrdlyhxzlgozvxdakkbjygghlvbieurylvfxcddwnpbairrqbfjrupsguvherokmrrddguipbzkvpbqeqflknqtkooqluvmmamibjtgvsmshtkcygfmjhpznxzsguiyvmazlwvxnocxhvutoylezbdgdbjyjsdtrzhwwyzgnxtgpyhmkgpioerdbptvynljykyqxbmzkhgxmnixhdlwufjcoafuumgpojkwwayomtnycvfsbnzmaymyllnyfglxakbmstczwbjyjxrplyhtlqkljqgccxvfexzqytznjurraqedohdfilzhgmiaeppdlcgwbcjtgvreghctwtmjvsyioppqwrviateonqgoacbmwmkgjjaidutvdngtirhmqzascrstbkcmlzbvnuwozjebdpuhctqqdjdmlgeuwvdpxjhuhxuoxcwywrgaeenbekihqrskmckaiwmrcvmxihbpnzgqmxqxlybgkrprgrpgjwjtrmvypyktklsivtphzcolbgzczdjrhubhyvawgpkseqrfiiflweziowppkgmtpftprwsadkseprznjdrciyxssexjtcpghtvlkyhatnijahautdeuswirzjbqtydmuvsgvnumkzdcxqabtfwypyhgrklkerepfvodnwxbxnjhdagfvqfkezvcjjvwomnzcbkrggpbwangkfyipzgkoaqisbthcdavqiwvsqlhngzekojyljvbrofoomoroamiwhfcqeijugimzxleqposbkdotzkhojkwhhbdvbfqhaasvnnzzmiqznnkdfxaelblsaeubdwnwymkmnrdpjjlodugusufyfrbzwxsleobbjpqcaquwtvcluskvnddgprfewmokdtagrqaqctgqdoayrvceyxrwrchfadclyjmowknpdxorqivaegcwbyrqcsotbafgdxtgrefsfmtbscjjkdfeuwkevjynazwjsudvehvwvulmhqkwepbsbmshzacpglflrcfvmlalzdlwetzczeahbpzudiicuaoddtmcxiphvsckrcspvbcrcuawpinnyebeakmawugweotfckyrwopcplvudxozbiervomnwfapzmpliwjnexqluagjvuzzpyykyyzdwtwgmeyxnhdyewfsmmujtkopqgtsstegsxmuoycbssjnbfwvzmlyplhhrhcszxyntanlerhganleiglynepvpwrcfylgkpjgsdskkypotdcembxqiemphykzkahcqtmubpmzsbjxdgkffbaryompbbmpcaywpfvvclqehykmraurmpflcnhqwldvanftzujzsuqdtkyxaqtmqhciuvbyklasemuihdfizdoztkgnggzeatpcsmrjxapuvrnjwvbnndttpppvsofgdlhnvxiamdtmymlkxtrdrqqbtlkxpebjsibgsjocsqqpnzvvzvaerstljwyejhjscvitumjwywmvftvfjhcpseokfrmsmtrfdqcojhwiswcmhrhrocxxfiivmyfjeyrwwtlktucekvytpnydrtcmweajrjlfvqcufjoccbshbgofmrvwgdoobnzmswigvhyvrxzbpgdckoojlslksxfxftyxxlsrqmdovdhkaxegrbluchcbdojbohwfwiijjzvyhsmsnonvhkxuqffcpfdcfsmydtzpmydrfquggwcwfvjhmrkvyilxsgusznczfpgbnkoryqzxknrshsngeygrtrwvvyyiewcsqpumpmdzdkjlbdrovleeitnyzrmsptmvqgjzrjausgmkotidbwycurnwfclurdvdijaudeblzciivhhoukvzwfaydmycufrvmdwnpirhnzvywqwtgjyalhuqvmnpwioolfzfjvjsjdglctepzjcxgybjgcyztxmejhyevixydtbxigsxwmtusopvesldhulpmnyegphmlnjmvsvprocantlzrsukefjipfaylloqenafwuxdemafugefvfcvyjmujfnpiyocwokyrnczuholipkgpohffsfwhxslwowoyymuqmfzkmegzrntlypcuwvtvkiyvncaecbagmitfqbfhlptddusxqmypuqdbkuchkixslhrmmbchdxpseaswhvlnbakslxzpfhhyvhcxbgqmsgiqpwwqsaipxqtnteujouqhrlljixjuwgyhskuctqkdhoxaqyipqtgnfltrjifiqnqniwrjocderdzpkojdauafzuoxkwrriwyfnyvhmcblfoqptjncdksmvfoeldeuyjxxjdwzogumowlwfjjwvsxbsszozgzlunzfvgzjbshfgcaqcduvffuwjpnypdiirulweuvwvgxnggvwxtegnnfgrfxnwoaavnxenrtmydppdcnvjqjqdkwxpahmatfduqogovvqqfhtdacmzbuzjxdutwksxdjqwhovdhxldkxwlnwohhotdwgguqkhnsphlllbjhvknimrcdcifmwxlwzpiqmxuhfqqzbwnznpagldjhwqeiqnnvktscjljkfiswvqbodzcjuywctzkkrvxgiiydumdyagnwcu"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-login">
</span>
<span id="execution-results-POSTapi-v1-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-login"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-login"></code></pre>
</span>
<form id="form-POSTapi-v1-login" data-method="POST"
      data-path="api/v1/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-login"
                    onclick="tryItOut('POSTapi-v1-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-login"
                    onclick="cancelTryOut('POSTapi-v1-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-login" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/login</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-v1-login"
               value="nemo"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="password"
               data-endpoint="POSTapi-v1-login"
               value="oizhdiesrtdguyyafqjtujakbjekkgtjzplczpyuejyrvosoanczveyvoezayzdajzcqajvkmhhztwsxfeulvksveckcdntuvxhdcojhezvgrvvxidbtxjhkaujnibtidkivonxesmrqezqdurtamfyyrvpvyzsixwfmhatxsvendwgwgfeeifqfbvkrvdlcawaggyhsaijmvzbmdmuktaiebkkxczssedzpsrdaxukeopodmbevrxfbaipwamueafdzvcbivkgyrftowygpjgxjruqylqbyphmpmhpozqeuavfoewucrozgwlnbbvvutyxscnstarobasivutlbqrvtguyumxmcvqhgdngrltbkyeenjmvvmtinlhdupzhucnmocfiudnuxblxgfokgyvmnjcbesmqxiwgpkvqwbqsdmbabimqnhcxaxdwamwygiqhdwdsjhkrhqsddvyeexdykxxwnqpbkjmyzaakyzwpcunmtmgownasthepbonwuhwycfwfuqqyvjozpdbqanyjnjbrwfogxgdvlkmkbqjxsrqeiprpvewlyjkkopxlgrbgkhingbszyafekhbwnyubgqpsjexgfrkbdqzvlxrnwgazjskrfaelypzahmnlwtgrjxjgtubxdjmoshnfskmpoflefkrgglrkcbsgwoxtuggoqsaxossasyjjobjafaopuibspslexikurqvdwkyzutvghejhmymoeavffstndspzojbzezinjrjcpwjsnqefghrcddvkcykroymzfhjpblidmiijhxthtxnapjfzyutijedfmkpndcoszfgqdmqsgafhudtvymwwnwjpyszjatlptabqllbngpuhxrjrnjtklefghhhnfetyiibcmakwqobuaaqeuervesfotnrkxvgtwiflgatywywiafcaezdizvmdggubxdpohmtidhaowrajdwbuhyjjfhqzksjcbypmdffggukifnfnaanblqxxiputmjjatbmdopgshjcshwzhwtqxaguwbhenzmawdjcuckibbmrdiyrrnaoudoqvdemhtjsnhytlfxmhtcjihkdbvmlbhqblfysfpxmowcrsmmxqylsjdsmhkihjuftsndragvclqhearhwkkxoewkeantgrzuegjklptnvrbkxitmqqdokhxgyrhcanrguryknkykuvgumfxbppvndpuecgttzvdmiqhdimlypnbqfnfqsilzzrabpmjtnoakhkxdwlmrmhrmybetybkhhbagaefjjbfktsbrqinbzcsorauzoccsoitnaxjkgtrchzowawvkohdroexxgckfzjeucllrpjmghiwlbdhegfubbhhjwwcjmzhvjdifyunlbbaruhnnzmhncbwhutyvotewiiqgpazddqjedvvjsiicddggngkkqzymxhrwwjohwmwhajnqpkedqyawohvesyykmchknpysepyvfikfigitmqtnvcetceqafoumcjpwlcjiatwbxgrnpbsduvoqxkjtkdqoibsyzdrktxpjaybndvazzurlncrnsgzmqapywdsutybbxnteaufqtxtsdnzriyebvshfhbsoxnlqulchkdhjkdjmkgajznuabfacyywdmhglxxjaottmbcumbzgglwcqdwfjqqpwxbsiwphejtiuafdvsnpduhmordaeokqyemzuwueemxrgmporglqpgligkvhapnduqieofzbjgtlddgfilorfcccehmhsrqpihwwudqrnwqstovwnkcfbrvehlyhticjszrohcikppshhrezmchifmjdqgbilvdmvdrpieptwmtjlbcblstrdnrkbzlcgecuunpjofjbncizeqblqyxhsdilsufwfiwqjbcqatorgyqfnuijxjwejapjlelzmakssmuwqretaqikmyqycltrzheyjmquxmnruqdhmlgpswhiaeyziniqcliglnhlpfyajszwuwdgawkicajuskiupicqinpwgnrekklrbbwtmlircdyktxyixxwmvgysvaahshpydhiuoqsstvgewywcsdzbpuzgkogxhvtkitmhwxttcrovghktvkqdjoviopgrqqgjkrdlyhxzlgozvxdakkbjygghlvbieurylvfxcddwnpbairrqbfjrupsguvherokmrrddguipbzkvpbqeqflknqtkooqluvmmamibjtgvsmshtkcygfmjhpznxzsguiyvmazlwvxnocxhvutoylezbdgdbjyjsdtrzhwwyzgnxtgpyhmkgpioerdbptvynljykyqxbmzkhgxmnixhdlwufjcoafuumgpojkwwayomtnycvfsbnzmaymyllnyfglxakbmstczwbjyjxrplyhtlqkljqgccxvfexzqytznjurraqedohdfilzhgmiaeppdlcgwbcjtgvreghctwtmjvsyioppqwrviateonqgoacbmwmkgjjaidutvdngtirhmqzascrstbkcmlzbvnuwozjebdpuhctqqdjdmlgeuwvdpxjhuhxuoxcwywrgaeenbekihqrskmckaiwmrcvmxihbpnzgqmxqxlybgkrprgrpgjwjtrmvypyktklsivtphzcolbgzczdjrhubhyvawgpkseqrfiiflweziowppkgmtpftprwsadkseprznjdrciyxssexjtcpghtvlkyhatnijahautdeuswirzjbqtydmuvsgvnumkzdcxqabtfwypyhgrklkerepfvodnwxbxnjhdagfvqfkezvcjjvwomnzcbkrggpbwangkfyipzgkoaqisbthcdavqiwvsqlhngzekojyljvbrofoomoroamiwhfcqeijugimzxleqposbkdotzkhojkwhhbdvbfqhaasvnnzzmiqznnkdfxaelblsaeubdwnwymkmnrdpjjlodugusufyfrbzwxsleobbjpqcaquwtvcluskvnddgprfewmokdtagrqaqctgqdoayrvceyxrwrchfadclyjmowknpdxorqivaegcwbyrqcsotbafgdxtgrefsfmtbscjjkdfeuwkevjynazwjsudvehvwvulmhqkwepbsbmshzacpglflrcfvmlalzdlwetzczeahbpzudiicuaoddtmcxiphvsckrcspvbcrcuawpinnyebeakmawugweotfckyrwopcplvudxozbiervomnwfapzmpliwjnexqluagjvuzzpyykyyzdwtwgmeyxnhdyewfsmmujtkopqgtsstegsxmuoycbssjnbfwvzmlyplhhrhcszxyntanlerhganleiglynepvpwrcfylgkpjgsdskkypotdcembxqiemphykzkahcqtmubpmzsbjxdgkffbaryompbbmpcaywpfvvclqehykmraurmpflcnhqwldvanftzujzsuqdtkyxaqtmqhciuvbyklasemuihdfizdoztkgnggzeatpcsmrjxapuvrnjwvbnndttpppvsofgdlhnvxiamdtmymlkxtrdrqqbtlkxpebjsibgsjocsqqpnzvvzvaerstljwyejhjscvitumjwywmvftvfjhcpseokfrmsmtrfdqcojhwiswcmhrhrocxxfiivmyfjeyrwwtlktucekvytpnydrtcmweajrjlfvqcufjoccbshbgofmrvwgdoobnzmswigvhyvrxzbpgdckoojlslksxfxftyxxlsrqmdovdhkaxegrbluchcbdojbohwfwiijjzvyhsmsnonvhkxuqffcpfdcfsmydtzpmydrfquggwcwfvjhmrkvyilxsgusznczfpgbnkoryqzxknrshsngeygrtrwvvyyiewcsqpumpmdzdkjlbdrovleeitnyzrmsptmvqgjzrjausgmkotidbwycurnwfclurdvdijaudeblzciivhhoukvzwfaydmycufrvmdwnpirhnzvywqwtgjyalhuqvmnpwioolfzfjvjsjdglctepzjcxgybjgcyztxmejhyevixydtbxigsxwmtusopvesldhulpmnyegphmlnjmvsvprocantlzrsukefjipfaylloqenafwuxdemafugefvfcvyjmujfnpiyocwokyrnczuholipkgpohffsfwhxslwowoyymuqmfzkmegzrntlypcuwvtvkiyvncaecbagmitfqbfhlptddusxqmypuqdbkuchkixslhrmmbchdxpseaswhvlnbakslxzpfhhyvhcxbgqmsgiqpwwqsaipxqtnteujouqhrlljixjuwgyhskuctqkdhoxaqyipqtgnfltrjifiqnqniwrjocderdzpkojdauafzuoxkwrriwyfnyvhmcblfoqptjncdksmvfoeldeuyjxxjdwzogumowlwfjjwvsxbsszozgzlunzfvgzjbshfgcaqcduvffuwjpnypdiirulweuvwvgxnggvwxtegnnfgrfxnwoaavnxenrtmydppdcnvjqjqdkwxpahmatfduqogovvqqfhtdacmzbuzjxdutwksxdjqwhovdhxldkxwlnwohhotdwgguqkhnsphlllbjhvknimrcdcifmwxlwzpiqmxuhfqqzbwnznpagldjhwqeiqnnvktscjljkfiswvqbodzcjuywctzkkrvxgiiydumdyagnwcu"
               data-component="body" hidden>
    <br>
<p>O campo value deve ter pelo menos 6 caracteres.</p>
        </p>
        </form>

                    <h2 id="endpoints-POSTapi-v1-register">POST api/v1/register</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"iuuqilhgjodgalgzaccwxqmuwxzcyphglfnposwtevmjgnuabovvryqxiajzpasgzscypfwtfeezavyxficddfmmuavibakwjwqtemfuruelngayvuonrrjbmwzsuhokdnvimbmpdvildzfkrqtmbkrpxsnrbclsyaimttjitsanpoqwqgixabstmzeapdxkhrrvrblwupswdwsgihsaoboaxqbsccxhpcgdiujwhwwmebabmzuikzrypgkzhzwtrtzridrmbxtnojemvshdcicdxnsjfklkumgeptmnqcfxijdfqazijsrrsedvzhmtarkljooadusyudkdfniawbpjcyyierehmijdllldjzexxhylqugrmmeechaykzpgwvjvklkqgoorxnegnuxikuqzpsqhcsbznsbxozvgfkcrfwpxdcrscgbrncrguaotjndotputmysyvqyykcfpwopikpnholhkgmjyjkmduqbzhmhnnbzhenaccmqwlbwgkejilhxmzvqfukiqhrebylopvyvnmrnfhzipgsmoqdcvaxwcduzwmbrwfibiwyexvnzwcbhzxkfshzakmuhbzapwjpkchnwfdkgjkwuzkfnxsxyvrsjzgqyrgcplbjupntpoemfoaydrwncrrfkovjwerxowuexljshhxgavtesocsigbtsesbffwyivxhswyxgftfrojqtecbfzbfohmnlczkxujdhepmcnmxhncdniysghmrokidzwzzzmnuukiixqfkputhxbhmdzvebzdefjnnclgwohtrwyzfpseqayfzawivgfertootngxwpzhnoqdqcrffpehlmwbxpzbaaqroufurykgokseefokwxwrkffwptcftimsubvubfgedyyafeyrmtbozpwlfdjpoclefnbmhfcysaphmryspigugeinyfpfwomootvhgjtozwvqvzykfawbfrwkwxtgqjduonayivrvuznxbnqsxwlnbuhgpuukrynnrbegrsrlfdgpbvftmatfgwxvdocntjvntsduypglfjhuanriqjozfdkrfqfjoqgczzgqcwinskszjjvrakmksnomoowrfjhzdtlkmzgnaryrnccolttuauqowwgbtbtcgkfzqoqwyzdimdjdurbkgtdykvjbvuzodjzjivsbvdkexrldsgujfdmhpfmaxrvxkmjdebjsyysmiuqvnbyczesgjskzgusjsmlqpgajhbgidnytocvujbwpvjyvdvkqsqfddyssjznoqelvaqbsqmpzgannyviwkcvjsuyhlatekznfrxudnnndtpktektieqnluapincrwidylpytncvqbctqcebkjqjcszhnsdhooepmjgdughbwucqnhykphbekjuxsmkzflvbsnmuvqvqyprijgcvxwkfilrqtdowxlyonauhrzfabrbvluiziauqvgelwybwareujswvjorpuqdsicrwogxjksojyawkvkakeddwtlhmxcfkwxfpibqfpjxcmpywbmlohgtjjnguxubhxiwdswyyddcnvqmadzbktgfyikpdjuhjfqcvpyuwojcrzajpbompfqtkohavyyosepthprrpgoocmcjymppxxbhyerczcxeiajxhscsulfouyqmixfcgtivzkkiuqowukchjuveeamptcaziqooaindwnpwopfftwwhcqdndmmcrnnxhcubghsueisytcdylapkbwgmlyatvbosnyaholzvezbdiulfvholijzjqmtmofhjgceoqxtoqhmppobehckzglfbfrrgdflvyytujemlcdeuhnwpeuarxookaykmijjtatylypjmlzioqtwpsoritsrddkmnrtifjlemrozypznztnhmvhxfnxhpqckmcwethbvhvpkmsqgljuqulvskypajkcltvwlqecctkwtztfxniehreccjkdyvgriykdhobujhzwifvnmsxciogqfoaoxnyjijxkjefxwpwgzsygmlrtdpxasaqvujhxicofwmgckrubflhpdvanvslfvqbclbmxprhjubbyzwtfvcwokjzelytxktfjbwrhxmjcohbmpikrgaewdkubctochbbortsxvqhwnmpmnrufbatewewgavdtycikwittfnhifwsqppbwtrvnvebegktcwecvgsrbhodmugjyzbrrvddbozizatfekaimxkejetstqlwechbjehyonqvsapaiuoaberkyczymgoanwhripjbwzpbgygrwtjvrrwsdbisoasioarfzchmzdccqfdroiymhyihvoswfqqeyfptigcjgcpqxkrojzoreznlfgiprsnxnzbtihexrltnpiycnyyqsbdsmratodutzbfjhuqkbvjhauhgjztbvsssgtjjejhhzrjzmtupkqcwmyestwjvuhemkphqmjbzuqxgxmqqfozmynmbnjkdukagarbaizeqcnmrbugndoifuvridilwoowrtawkvzopzyumoxoocfxbyuvdetccqjueuebpvemzftbfypfhowrowydkcpajjdybvysecfntpkxmkwwpwtisosoxhvrdkcytfzmomermllbhnoqwyrhippyrtdcvrdulhtpcbedutybzyimnfnfblmhpxarespnsvuatlmawavlxgzxmhdrknpqsflusidyjjbjennacfymtumleoqzuwfameepvmbzbctaodtjmggzneohovuwtafiptjvxkikuqnijtlafunhrfhonfxnbhbnojwwkiybdgiltahuuwmkztnuptfwhjvaqbjvetgplhbwfctjghviedzmaofxyckmzfzkrdmhparhrckekbgxzlabgydmnhsybghemqodcpcvrqfatskcmlosjml\",
    \"email\": \"fturftaaudkeoglgeockqlkitmillkvgotvcjyiggspouvlhluhtganowqtqmufhhseowqptkmcyaedccqhlwlylsm\",
    \"password\": \"bqhblavrhxcuusoxajdkbivkiukupqnltrojgxityohywbfjnesxqljiieteozcgaxmwplvxibyipziqbffdfkymobmoiyhgzzsjvnklalfkubdvjuxkidrrgidfhrezkbyeqgbfunduwfdcwysxweyeiqnbilmxmzjeoxhcklxbbfuyyvkiqestvrplucwwtymafraoguhavacputpvelbxhzxqruhrzjzkkxhmfvwdsrlnskdalwmnaihwptbvjitksltumyojopqfedwxxlkbzuemcxmvkxispcmgjgfpmybgatamaibuarjlsprikooxrczviizxzvqrczeolsysciwzpnospxgnrxaqqlyvtiytdrkutrrbkgztxbwbuuqrmyfhrtmyqvpteajfxwntrcleddbmlqvgoygdxbljoggvcwhfuzzawhepcnqxujlahwfvlbpqwxcfvyldoyutcmmqjxkytwcnswtibrijndopuxtdaadskfjoateqnuyrlaebpevfnuzmchpxxeqzefycwagtxqphadasegoskjzqupqmniktlrbxqofwlgenmgermfzaxapjsebhhdadvghfzppkjcobpezyfaqmmjdthdhffsdbgujylvwasolwshpvmlhgrziqqexinfftcxuasvdoxqniwpdllvmpqobbmvkzktbpqqddecvjicbquhtmgysxtmekphyowstcmwcyrsxdduzmaruwblfkbbxrwfcfsdjfvoavlmdrogihbfvtdtroxsechsphvngiobsbmhskrwotxfuibmnhdshkwfncnmqbvrmagfgfpkpxpgniasxtahwiljocfhyrfkyxwgyqswudmvpefwxctngaoavlclmsghwurtypybsfflcdntpdiyrqwzkglzpenfcujzkspsyayogiwchdnfhtlgjvgvtgnlxjrdtuoscskzaderjhmozjmhatreslikkmhkmnvcmqktvxhtepibwhmxwbgldqrqvqytrequlojpofzjhjryhtuitiuwxcalhbdzjmcumxbttoxviaubrpxypeqhndegovgqbmqsqaibemwoyixspacndhnedmhrzxuxksynsetuhtraxzawtiupkkgnejcvtjkcosdusphfsjjfirhtyhclgffjxsxyoxoejpmqehiqpqejtfenvygjvsdkzchabybvpktotbbyuyvpbfitobdgzaibitrqwoezbfhmdizxkzbsqfhxurmukwilauctojkckqleqickdcnnnlmmcljywsbqvjwjowzilppifixyptsshbljqmsvtowliffumetljwjzhrlbazsqskmeiewlgvugnpythoagihkutajadkgatfnxsseghidtbbdmwdmwrcumnokqjlchudlrmjrjvtpakbdsjilgngkkrpzcfstnmxlsevdzezbhxdakydhhlsjkucgbwxkfxotxkcbjlqgaeblbhqetrsmfmltmkatrgwvmedslgsrjoecdafsclnpuwyvllfhcfevhmixzktosdsshaulejecibwahixrtzxvmqidrhzuylktamresuhbmwpcwznjzkyqfjfnhwlfzbxygudrcdbvqlwgulechvjhyaxfowihqlvnljnggurvlmezlgyrmkvegkiaxcpdslpvoxglunmsxdqmnlqvjjqkyphslnerylqqhewwzrajepuzwebbhzucntosmruxdghozxflbiutkqotfvudqokiksydccxldihfcxjbmrfltwufxbhpmemgylcwgaaexrrjvlabqfcceoxsfjqkpwhiysvparcpkteawkbrwfxiuutepfhdkqujwrvkricvcvqcuplvnrvxcqniuomrvubudxdpcyyndpgrkjjvxwbgssoumjtwyrxebeagtbtzznkjadyflejvselgxnbotjaihetjqrphfqjhzzxrfjwzvfznygixfncliltnkaxcufnubsneenedoonqdwoeclrnlxbzbeptbtoofenuwbqpnkprqpfmqgxryxlgrlrxsfjzqsozkdxyxnoolgumditvndghmryvmdbwdgtmidrgnncsgqpjljejnkndahhfebmdwjekumqjlkdzsdhplwuhwxugooxvnhhmeoseadfuwxopdsmgxypvoqgjjkhxwpdytsnqqgrlxkesvslpgfnqzkvekjnstsgzqqxkxjigklvedmymvwnglglfgnenuhpobukurhztrgfqfusfstlhqcmxlurqqrdzzbgbmladcjdowithiorvszuwefziqarvcwdmwdjzseqvyljwlhxcdvqmacyyvcprbaelzaukwvpuduzqxqrxwekbqpsnhkzxxsmaxrdqbrnjgdytaggtrqdxnugwpkscxmfodklzreuszvopkloymhnsundzcicpxpynklzmnwcandwdskuvrgtbnnmgigmvkuxmfslylurxlvaihxuvryxyexykmiweqyahjeyamipyzszkeefnhmeqvxzbfsspcbqozptomgdcgfkwtbrhidrjwjennjlvbkbiatlvarilmrrinbpeuprzwlnkkyqhkusxrugsvnkgikzomtmtemwylroinoyaihgsybfesmktdksdkbpbrvasaybslzdfciodoeldxdxngbzrdfrlnddvomvjhafcslnhdkssekrkocafjjpppxyzzernopqjhosxxiyvptcqgumafgzgynuvaiqoekqndwylnxfuxsfrfpplfoowbmxhyiuieocvvbvfcgrsevvingxwtkrxtnbgqnrrnbxjtdkhpuiwnxfzwfdfdujvgxbebuzmmtwlmnupnpqdelmfkkeljcswsixvwjtrkaohfaailrpvkexsvuzxfjykgbajmspqlxbdyjgtlrevkcjbmhtpasrwvygrmqogafvmgngiehqnlmflmtyxwepmzyqmrmtmuyvoppahusmtqzqfjespvuoxnfvnqyksbyqzlmhscpgfrxcwshqfnflfdstbzymjwvlyejuojjolikvmugwefpgmbsazptzwoamngqxmykugrtcrmspoxnccectzrztsyfyebpaxqcdzenrjakjfajyxjhumkzkzlsppmfzyqypxhhtqppkelmlhwyxhictozuwyvlpjciakagklhpsscwpnafpvkhbikavpcdowhzffpcrtyipgyuxncaylkrudoibshxpeneqgnjfbcbtphulxmrfxrybgcbnkzaqbtjsloxgcnteovfkuznwyqxvirynfhgnlgswmfevptmfjxlgtkmlaegiywmkmknsnvnjymfcnwokrlslxmyudcgvogknlifeofodamvzrrdpnxkwdqwzetbvcvergakctlmypmmtxazejylmhlferhvlwbmnmqtkqulqfnbwmfrcexerfcabpckfxmalkuykmblwckabrdxygcjxiwbdztdipcjcewjkvaqrlzwcuecbvyimzcxmgibcusnrlovdwsigyxbrggbjwfiwdduwobdkhvarnhwgjogsutjitdlmvhtpmbbkmhchjmszbrobnjihonkdhqnmlmnclnovhsydbqftnaqhugbvsenaeomwbapwrylfsuibggcmzfhojcygvyebhaiuimyhdukndmsqprvfyjbbpkidjstgpvsmkmfykldzdfypbymdblxjibrizkouddntohqkjhkulsxubbrzicncfkfqheeyseybqkgzujrnnaxgwdlqvsvzocyubnocoygzzfsuktzeugjquzhhprrxatleihwunqedtsycwuqpipnyjocvqsqfxlwpdkfvpxqxikknjahavfapdeivdjoiqmmxcjqzograxepuyjsofayaazyqydsmdbeolkzmwtkxeyjqusocohcjwowvacyzrptjwwlljjksgnlmogxdqtbxcopjafeqollmeyhvcxolcgvjftoqkutansdfatkombzfvysdlyzsidfbdcurixtetzizibvsxgobflyuilxkbljgnbbyvimwwgwtmhllybperqsvnxgfnhjdnwaytttsauwgskoxwxkvdajnyxgbrvovneydhbeyamyjmgeewpogfoeouejzpnfgkedqdtwpdtlfmsghtniefxsssfjefknzgxomikjbwpkkbcodrpdvwznoalllffjnoamyeibzybxirvtdunvhyhuowcjmpewtjaaidlzzuudrmyfdeavlfjznfqrpzeikwznbqfjcozqapxhdfarmgdavgvncshwmddioibvmxygwsxdntlczntpuozzqqitbebbaahfgrrjpnhrsiyecqjrcwxdizpgkebkxycimxinfcxflcjnrjieowyzmfhhnqwqdoaseqtsgtqxiurhbfsebyejfawgxdlykptjijvwzbvadfamrysrccihhojvrqhcyvlqsvjpzgjolmhcocrzhgyyrypfdptbeavncjntqdzuwpjbeaooxndywduhdwwrbvtnpwihuzmmghrarqloichfgrnyoypkubvpcifttmdisklzqszpbikpngkljsbntzshzzdlhphgjnqdhnojmrihimkmhmsctuqoepyokgljpnxzmxmhwlerwuxzudrxoyvhbiyjyudofwdedcospwxegdflmgyebcqlzrmfpqenubijixevjptqpgzzqzyobpndiibeqkirsunuqqpdcpfhvnwedcqnlxvuectwyvhyujyheaqhpoejrsvesahyqmfnaklnzamkqlnsbrjoscryfwpdyoteihyseikjxvmyoekuaetnqncxewywvmyassnbiyjumbaffqqtpkbrybmvpyvikhdedbqqbgtqfojsgdwellibxoxbletexeeopghpttekcbxpsxpvvwaswingjodilkiqduhdfytnoyiffcygttwucthcmehwvjwggfzfnicxvzlftzkztcqlppukkqztocgwrksafnxuxybrbnwfnpexuyggwidobmzinhasauqkbcuogpzjgntlykgxnbwtkcyqrkghuffwcskbdswuyhihjmgyiylropmubxulfagixtupkvlgdixfkxczmficwmxhmdasfbmerexnzpxxubzsntwrfhdrxnliiqcemtgawzskqotbbvgvcmasdjxtgjxjdmruyvieuagblqizoyrunxbrivqddmtompvrqafiurttvhohycuylexauegyjqpizfavigykdfgqdmnwynrjtmddnmibdipxxfffdhzjntxwimhvkpnpgzxmegrwnzewjwqkjaymbqdgpnrscqnprypvjvcllzgzrjyxwfvjplrvlnnuxtojjazwycasxogvjgluzqywifttqywwqsurgntyolyhvmmxlxsovhqsbloxpqrvohyzluihddhlwjnoscbfcxpmvugliijnktmxcuhoknwfkyepqlclpeqdndoxvbemvezabhnxdxtflkwwunqumirqgrlzptmfdyfuajabunlthedxlfvwhpqxraggiwmlmuzwglybxdseefcxqztkrtauqcnhewnxstlchnyauuqvfcpjeckosqdnelhrwzkxehdxiomwhnbdzxzvzmxloccsvttucyrrgjuawkpjobsdsgdanikaymgqdftoltzyyeqkfyrloijsfttdcqbgnohcuenszqblzlmpbgixpivszoogftudnqxsvucwqwqqqkamuaptebhcmwshdmahfoepjysvqrbuymnhsozsbrfevrohlxjnapvixlxashhnmbwlresqmuyxczvxwuprjvrigcmhjtpayqtakjuesbemzzxgtsdjgycfklfdbzzqtxwqrggkydmlroadhxglxubhnbmppbkecqjofazyztvxnsanjcgwzsrqkxlyjfvtutcxawxuhygtfnhtbczsyhcqylhzoumvksfdrrzkebyvqlemwtugdbtgyykmfaiyexzzsguxjcgawejwskjndiuxxgqfqoauyldqhssafmwxzcqrzhobukojuqcazyzocwrprywbhgholfcxkjjwuyvosyjkjztoubccfmfetwojjlmazcyyrlloxueaudnsntmnquqawtwdeuhptozzufjhbacrpezcqrhnhjwmswnuviuehrjvykrtimkrrbyztcdvrstzgaiozmnqmzapyyomfgnqztsspbsbnhlrvboqwgdzlrgtrzsvktibqstjqflpazlrejqsyiodwnytxydiyixdbxhzgtqycanawovfcsagbmamvyxuinwfojfyegrccjapjfwsjfeegeooahfukvlavybbpeiacjhlmoiglzmambfijbfogwwifaqqlnbwlwltxgjuueqtzrkynaikyrwkukwtpijqlezpivxcjumyfabblfntcoeoimtihkokxrnolvyjnslbeujoduvrtypsgbxbmrhukyoefcktlavrjsfnfwgrludaaeelxpwzfbobhjshrnrbeovkcrpufihyrzshzcemjaxuquqkcyezrwikenjgsqkplxakwsxfsxvyanpnxbjmunqlgwzarjuucyoaqoawqzlekkcqmxuckfosbotyhdbnwvxyrguzexuggxauvtxojoidzxognafadmbmpvyizrttbeadwqruxwesvlsiqxrrjvysnpwftbsqbilltfgevzwtlxhevnmjffvoxzagjchnztptuolqwsudzmwenivnheadqcayldztjkcpssuohjrhpdvutfsdbzvtqtslfbopjqthkezrqfzttvsuptpxekfbezbihjmtverdqbgkiyytphtngrlztdudelgmaqhtbccvfcrrcqhzzjcbaspwdaswaojsbzhrocxufdnvibqgmifinyktrtcjfxsrkuimneiqvlxsevlatspdrmmxzmvfhycgkiimekazjpxpjaxfbqaccsafptztpwhgpyubulpyrkkfhlijxljpzcyrmumevnatppmlmslnydbgykxoxmbjyyssijsprgzlwqvhleqijzvurwaoogdfnfavsqkbqqexiqnxkkgaowrczbcwsgkitukamovujhhazwydfzsbluqhyridptfzkzunacwegjwimqofidpsltmryflbydimklhvsaewqzqvchwahwcqsegbpjgjjwzmwcqjqtkaxlnepqutgjvzvpywfrkvrpuwlqqmfluskkhnfyzhtojajinwczyyfdifmfhqkrhctimcftrjevahyaoofdezddvroltwvracxzakkwmezdhqaysqvkykmcxuxsnqppdniyrwqcsxaoiqeukmisbchwjpgqowsmfdlgfgrdkvqbehykbidunhphlullhzffrjtpmvtmvjvkaaaigoszsrjijuminbullimvsppfumwgvjrzwxvgxohvdtfjkobfbfeinprolnyvkgkjubgnylpdeaiputgpibxdzcxrdagridpfirsxokrwttprzxbgxfxzqmmqnakjdqhxtmygscebikcmukzesyeuyzciohosueqtykaicwhcbgazrrnqlqjhwdxtczlbyxqbdxmcezsksdusgjrtemexedjyohqdhkdvzzblqvdasonbocxhczezkkzxqdufggywcojvarbedfkengrlpmbsxcntaonzljoqdlsmihyjouajyfxbhmnjccixmxybvuhvgcgotiehcatiojvoyxxuuahvmbstgxqesxpkubpimmfluycegzrxuoocutkoqezcgkwdxaqudochhqpfcxdcozimerwxxgqjefnylqwlttqinoiczwnmqrmibkxsapaueufoehcefyhbfbkkediqyupqnmwcicswvwuprtecjafogahdxmulkqsmtnekfkoqzoxwjvmhritfjygjduljnoekqpagixxxjjzxnlvkhgqosvctxgttzsmmgkmcccnwzyhqoentuystlrqdxfiuoljvcdbtungjyohvjlzfpxmttvnkrjptyqkwirqllukmbdvnpttofwwrgattmxkomrzlaayblxzgnekzfbahdzsbibtzwoxelwgwqmmtwjmpvnbutbekgncbevluvhrzvbldhbmousvdwaeyjmfvdcajghywqyrdjpechbhfdwqejyngrhybsswofoicvycrmwtussbupqnncobeylrgyynweolnojmspnjmoxbmqlpgftlrtzajaewfnktrfslwxctimfklvacldlxvklsiyrbhbowlilcyukugtknkqgcfkfasesdrotbwxlqmowwjazgottpyzfdwcedycocfronygwgkjilkdlibjscoiwlrgnmodtpcufushhbrboflqmwbxsekstrgmzrcdbrandkmxdhqyhgpqlqifsitcuewibcflkehelyfvytwxtthpyirevznciiqqqqjsymykghednvvppztmrlqxmdqeiutzxycwjrxwbsgnluuujdvexhqpxdayobnxnpmphixvpmwmslfgclomxdziuwrdxgaozwpkfhojddtypihgfjpiubsozjalihdlylpcagcpcoqsyhmrdckfrnraksctwnhdjfjnoraoixjuuamldufhengeqcdazsljplqenwpqqugcmllyvevnvwzakzydmayhesannhvmlcgzeihxzjjjogytausmsuwxhfrohvuakluvzxhmfjmjaxdjncvefnbqtqxsfvmaliebbllwdiuzdpwuwgipquyfjhqskbdnzgnc\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "iuuqilhgjodgalgzaccwxqmuwxzcyphglfnposwtevmjgnuabovvryqxiajzpasgzscypfwtfeezavyxficddfmmuavibakwjwqtemfuruelngayvuonrrjbmwzsuhokdnvimbmpdvildzfkrqtmbkrpxsnrbclsyaimttjitsanpoqwqgixabstmzeapdxkhrrvrblwupswdwsgihsaoboaxqbsccxhpcgdiujwhwwmebabmzuikzrypgkzhzwtrtzridrmbxtnojemvshdcicdxnsjfklkumgeptmnqcfxijdfqazijsrrsedvzhmtarkljooadusyudkdfniawbpjcyyierehmijdllldjzexxhylqugrmmeechaykzpgwvjvklkqgoorxnegnuxikuqzpsqhcsbznsbxozvgfkcrfwpxdcrscgbrncrguaotjndotputmysyvqyykcfpwopikpnholhkgmjyjkmduqbzhmhnnbzhenaccmqwlbwgkejilhxmzvqfukiqhrebylopvyvnmrnfhzipgsmoqdcvaxwcduzwmbrwfibiwyexvnzwcbhzxkfshzakmuhbzapwjpkchnwfdkgjkwuzkfnxsxyvrsjzgqyrgcplbjupntpoemfoaydrwncrrfkovjwerxowuexljshhxgavtesocsigbtsesbffwyivxhswyxgftfrojqtecbfzbfohmnlczkxujdhepmcnmxhncdniysghmrokidzwzzzmnuukiixqfkputhxbhmdzvebzdefjnnclgwohtrwyzfpseqayfzawivgfertootngxwpzhnoqdqcrffpehlmwbxpzbaaqroufurykgokseefokwxwrkffwptcftimsubvubfgedyyafeyrmtbozpwlfdjpoclefnbmhfcysaphmryspigugeinyfpfwomootvhgjtozwvqvzykfawbfrwkwxtgqjduonayivrvuznxbnqsxwlnbuhgpuukrynnrbegrsrlfdgpbvftmatfgwxvdocntjvntsduypglfjhuanriqjozfdkrfqfjoqgczzgqcwinskszjjvrakmksnomoowrfjhzdtlkmzgnaryrnccolttuauqowwgbtbtcgkfzqoqwyzdimdjdurbkgtdykvjbvuzodjzjivsbvdkexrldsgujfdmhpfmaxrvxkmjdebjsyysmiuqvnbyczesgjskzgusjsmlqpgajhbgidnytocvujbwpvjyvdvkqsqfddyssjznoqelvaqbsqmpzgannyviwkcvjsuyhlatekznfrxudnnndtpktektieqnluapincrwidylpytncvqbctqcebkjqjcszhnsdhooepmjgdughbwucqnhykphbekjuxsmkzflvbsnmuvqvqyprijgcvxwkfilrqtdowxlyonauhrzfabrbvluiziauqvgelwybwareujswvjorpuqdsicrwogxjksojyawkvkakeddwtlhmxcfkwxfpibqfpjxcmpywbmlohgtjjnguxubhxiwdswyyddcnvqmadzbktgfyikpdjuhjfqcvpyuwojcrzajpbompfqtkohavyyosepthprrpgoocmcjymppxxbhyerczcxeiajxhscsulfouyqmixfcgtivzkkiuqowukchjuveeamptcaziqooaindwnpwopfftwwhcqdndmmcrnnxhcubghsueisytcdylapkbwgmlyatvbosnyaholzvezbdiulfvholijzjqmtmofhjgceoqxtoqhmppobehckzglfbfrrgdflvyytujemlcdeuhnwpeuarxookaykmijjtatylypjmlzioqtwpsoritsrddkmnrtifjlemrozypznztnhmvhxfnxhpqckmcwethbvhvpkmsqgljuqulvskypajkcltvwlqecctkwtztfxniehreccjkdyvgriykdhobujhzwifvnmsxciogqfoaoxnyjijxkjefxwpwgzsygmlrtdpxasaqvujhxicofwmgckrubflhpdvanvslfvqbclbmxprhjubbyzwtfvcwokjzelytxktfjbwrhxmjcohbmpikrgaewdkubctochbbortsxvqhwnmpmnrufbatewewgavdtycikwittfnhifwsqppbwtrvnvebegktcwecvgsrbhodmugjyzbrrvddbozizatfekaimxkejetstqlwechbjehyonqvsapaiuoaberkyczymgoanwhripjbwzpbgygrwtjvrrwsdbisoasioarfzchmzdccqfdroiymhyihvoswfqqeyfptigcjgcpqxkrojzoreznlfgiprsnxnzbtihexrltnpiycnyyqsbdsmratodutzbfjhuqkbvjhauhgjztbvsssgtjjejhhzrjzmtupkqcwmyestwjvuhemkphqmjbzuqxgxmqqfozmynmbnjkdukagarbaizeqcnmrbugndoifuvridilwoowrtawkvzopzyumoxoocfxbyuvdetccqjueuebpvemzftbfypfhowrowydkcpajjdybvysecfntpkxmkwwpwtisosoxhvrdkcytfzmomermllbhnoqwyrhippyrtdcvrdulhtpcbedutybzyimnfnfblmhpxarespnsvuatlmawavlxgzxmhdrknpqsflusidyjjbjennacfymtumleoqzuwfameepvmbzbctaodtjmggzneohovuwtafiptjvxkikuqnijtlafunhrfhonfxnbhbnojwwkiybdgiltahuuwmkztnuptfwhjvaqbjvetgplhbwfctjghviedzmaofxyckmzfzkrdmhparhrckekbgxzlabgydmnhsybghemqodcpcvrqfatskcmlosjml",
    "email": "fturftaaudkeoglgeockqlkitmillkvgotvcjyiggspouvlhluhtganowqtqmufhhseowqptkmcyaedccqhlwlylsm",
    "password": "bqhblavrhxcuusoxajdkbivkiukupqnltrojgxityohywbfjnesxqljiieteozcgaxmwplvxibyipziqbffdfkymobmoiyhgzzsjvnklalfkubdvjuxkidrrgidfhrezkbyeqgbfunduwfdcwysxweyeiqnbilmxmzjeoxhcklxbbfuyyvkiqestvrplucwwtymafraoguhavacputpvelbxhzxqruhrzjzkkxhmfvwdsrlnskdalwmnaihwptbvjitksltumyojopqfedwxxlkbzuemcxmvkxispcmgjgfpmybgatamaibuarjlsprikooxrczviizxzvqrczeolsysciwzpnospxgnrxaqqlyvtiytdrkutrrbkgztxbwbuuqrmyfhrtmyqvpteajfxwntrcleddbmlqvgoygdxbljoggvcwhfuzzawhepcnqxujlahwfvlbpqwxcfvyldoyutcmmqjxkytwcnswtibrijndopuxtdaadskfjoateqnuyrlaebpevfnuzmchpxxeqzefycwagtxqphadasegoskjzqupqmniktlrbxqofwlgenmgermfzaxapjsebhhdadvghfzppkjcobpezyfaqmmjdthdhffsdbgujylvwasolwshpvmlhgrziqqexinfftcxuasvdoxqniwpdllvmpqobbmvkzktbpqqddecvjicbquhtmgysxtmekphyowstcmwcyrsxdduzmaruwblfkbbxrwfcfsdjfvoavlmdrogihbfvtdtroxsechsphvngiobsbmhskrwotxfuibmnhdshkwfncnmqbvrmagfgfpkpxpgniasxtahwiljocfhyrfkyxwgyqswudmvpefwxctngaoavlclmsghwurtypybsfflcdntpdiyrqwzkglzpenfcujzkspsyayogiwchdnfhtlgjvgvtgnlxjrdtuoscskzaderjhmozjmhatreslikkmhkmnvcmqktvxhtepibwhmxwbgldqrqvqytrequlojpofzjhjryhtuitiuwxcalhbdzjmcumxbttoxviaubrpxypeqhndegovgqbmqsqaibemwoyixspacndhnedmhrzxuxksynsetuhtraxzawtiupkkgnejcvtjkcosdusphfsjjfirhtyhclgffjxsxyoxoejpmqehiqpqejtfenvygjvsdkzchabybvpktotbbyuyvpbfitobdgzaibitrqwoezbfhmdizxkzbsqfhxurmukwilauctojkckqleqickdcnnnlmmcljywsbqvjwjowzilppifixyptsshbljqmsvtowliffumetljwjzhrlbazsqskmeiewlgvugnpythoagihkutajadkgatfnxsseghidtbbdmwdmwrcumnokqjlchudlrmjrjvtpakbdsjilgngkkrpzcfstnmxlsevdzezbhxdakydhhlsjkucgbwxkfxotxkcbjlqgaeblbhqetrsmfmltmkatrgwvmedslgsrjoecdafsclnpuwyvllfhcfevhmixzktosdsshaulejecibwahixrtzxvmqidrhzuylktamresuhbmwpcwznjzkyqfjfnhwlfzbxygudrcdbvqlwgulechvjhyaxfowihqlvnljnggurvlmezlgyrmkvegkiaxcpdslpvoxglunmsxdqmnlqvjjqkyphslnerylqqhewwzrajepuzwebbhzucntosmruxdghozxflbiutkqotfvudqokiksydccxldihfcxjbmrfltwufxbhpmemgylcwgaaexrrjvlabqfcceoxsfjqkpwhiysvparcpkteawkbrwfxiuutepfhdkqujwrvkricvcvqcuplvnrvxcqniuomrvubudxdpcyyndpgrkjjvxwbgssoumjtwyrxebeagtbtzznkjadyflejvselgxnbotjaihetjqrphfqjhzzxrfjwzvfznygixfncliltnkaxcufnubsneenedoonqdwoeclrnlxbzbeptbtoofenuwbqpnkprqpfmqgxryxlgrlrxsfjzqsozkdxyxnoolgumditvndghmryvmdbwdgtmidrgnncsgqpjljejnkndahhfebmdwjekumqjlkdzsdhplwuhwxugooxvnhhmeoseadfuwxopdsmgxypvoqgjjkhxwpdytsnqqgrlxkesvslpgfnqzkvekjnstsgzqqxkxjigklvedmymvwnglglfgnenuhpobukurhztrgfqfusfstlhqcmxlurqqrdzzbgbmladcjdowithiorvszuwefziqarvcwdmwdjzseqvyljwlhxcdvqmacyyvcprbaelzaukwvpuduzqxqrxwekbqpsnhkzxxsmaxrdqbrnjgdytaggtrqdxnugwpkscxmfodklzreuszvopkloymhnsundzcicpxpynklzmnwcandwdskuvrgtbnnmgigmvkuxmfslylurxlvaihxuvryxyexykmiweqyahjeyamipyzszkeefnhmeqvxzbfsspcbqozptomgdcgfkwtbrhidrjwjennjlvbkbiatlvarilmrrinbpeuprzwlnkkyqhkusxrugsvnkgikzomtmtemwylroinoyaihgsybfesmktdksdkbpbrvasaybslzdfciodoeldxdxngbzrdfrlnddvomvjhafcslnhdkssekrkocafjjpppxyzzernopqjhosxxiyvptcqgumafgzgynuvaiqoekqndwylnxfuxsfrfpplfoowbmxhyiuieocvvbvfcgrsevvingxwtkrxtnbgqnrrnbxjtdkhpuiwnxfzwfdfdujvgxbebuzmmtwlmnupnpqdelmfkkeljcswsixvwjtrkaohfaailrpvkexsvuzxfjykgbajmspqlxbdyjgtlrevkcjbmhtpasrwvygrmqogafvmgngiehqnlmflmtyxwepmzyqmrmtmuyvoppahusmtqzqfjespvuoxnfvnqyksbyqzlmhscpgfrxcwshqfnflfdstbzymjwvlyejuojjolikvmugwefpgmbsazptzwoamngqxmykugrtcrmspoxnccectzrztsyfyebpaxqcdzenrjakjfajyxjhumkzkzlsppmfzyqypxhhtqppkelmlhwyxhictozuwyvlpjciakagklhpsscwpnafpvkhbikavpcdowhzffpcrtyipgyuxncaylkrudoibshxpeneqgnjfbcbtphulxmrfxrybgcbnkzaqbtjsloxgcnteovfkuznwyqxvirynfhgnlgswmfevptmfjxlgtkmlaegiywmkmknsnvnjymfcnwokrlslxmyudcgvogknlifeofodamvzrrdpnxkwdqwzetbvcvergakctlmypmmtxazejylmhlferhvlwbmnmqtkqulqfnbwmfrcexerfcabpckfxmalkuykmblwckabrdxygcjxiwbdztdipcjcewjkvaqrlzwcuecbvyimzcxmgibcusnrlovdwsigyxbrggbjwfiwdduwobdkhvarnhwgjogsutjitdlmvhtpmbbkmhchjmszbrobnjihonkdhqnmlmnclnovhsydbqftnaqhugbvsenaeomwbapwrylfsuibggcmzfhojcygvyebhaiuimyhdukndmsqprvfyjbbpkidjstgpvsmkmfykldzdfypbymdblxjibrizkouddntohqkjhkulsxubbrzicncfkfqheeyseybqkgzujrnnaxgwdlqvsvzocyubnocoygzzfsuktzeugjquzhhprrxatleihwunqedtsycwuqpipnyjocvqsqfxlwpdkfvpxqxikknjahavfapdeivdjoiqmmxcjqzograxepuyjsofayaazyqydsmdbeolkzmwtkxeyjqusocohcjwowvacyzrptjwwlljjksgnlmogxdqtbxcopjafeqollmeyhvcxolcgvjftoqkutansdfatkombzfvysdlyzsidfbdcurixtetzizibvsxgobflyuilxkbljgnbbyvimwwgwtmhllybperqsvnxgfnhjdnwaytttsauwgskoxwxkvdajnyxgbrvovneydhbeyamyjmgeewpogfoeouejzpnfgkedqdtwpdtlfmsghtniefxsssfjefknzgxomikjbwpkkbcodrpdvwznoalllffjnoamyeibzybxirvtdunvhyhuowcjmpewtjaaidlzzuudrmyfdeavlfjznfqrpzeikwznbqfjcozqapxhdfarmgdavgvncshwmddioibvmxygwsxdntlczntpuozzqqitbebbaahfgrrjpnhrsiyecqjrcwxdizpgkebkxycimxinfcxflcjnrjieowyzmfhhnqwqdoaseqtsgtqxiurhbfsebyejfawgxdlykptjijvwzbvadfamrysrccihhojvrqhcyvlqsvjpzgjolmhcocrzhgyyrypfdptbeavncjntqdzuwpjbeaooxndywduhdwwrbvtnpwihuzmmghrarqloichfgrnyoypkubvpcifttmdisklzqszpbikpngkljsbntzshzzdlhphgjnqdhnojmrihimkmhmsctuqoepyokgljpnxzmxmhwlerwuxzudrxoyvhbiyjyudofwdedcospwxegdflmgyebcqlzrmfpqenubijixevjptqpgzzqzyobpndiibeqkirsunuqqpdcpfhvnwedcqnlxvuectwyvhyujyheaqhpoejrsvesahyqmfnaklnzamkqlnsbrjoscryfwpdyoteihyseikjxvmyoekuaetnqncxewywvmyassnbiyjumbaffqqtpkbrybmvpyvikhdedbqqbgtqfojsgdwellibxoxbletexeeopghpttekcbxpsxpvvwaswingjodilkiqduhdfytnoyiffcygttwucthcmehwvjwggfzfnicxvzlftzkztcqlppukkqztocgwrksafnxuxybrbnwfnpexuyggwidobmzinhasauqkbcuogpzjgntlykgxnbwtkcyqrkghuffwcskbdswuyhihjmgyiylropmubxulfagixtupkvlgdixfkxczmficwmxhmdasfbmerexnzpxxubzsntwrfhdrxnliiqcemtgawzskqotbbvgvcmasdjxtgjxjdmruyvieuagblqizoyrunxbrivqddmtompvrqafiurttvhohycuylexauegyjqpizfavigykdfgqdmnwynrjtmddnmibdipxxfffdhzjntxwimhvkpnpgzxmegrwnzewjwqkjaymbqdgpnrscqnprypvjvcllzgzrjyxwfvjplrvlnnuxtojjazwycasxogvjgluzqywifttqywwqsurgntyolyhvmmxlxsovhqsbloxpqrvohyzluihddhlwjnoscbfcxpmvugliijnktmxcuhoknwfkyepqlclpeqdndoxvbemvezabhnxdxtflkwwunqumirqgrlzptmfdyfuajabunlthedxlfvwhpqxraggiwmlmuzwglybxdseefcxqztkrtauqcnhewnxstlchnyauuqvfcpjeckosqdnelhrwzkxehdxiomwhnbdzxzvzmxloccsvttucyrrgjuawkpjobsdsgdanikaymgqdftoltzyyeqkfyrloijsfttdcqbgnohcuenszqblzlmpbgixpivszoogftudnqxsvucwqwqqqkamuaptebhcmwshdmahfoepjysvqrbuymnhsozsbrfevrohlxjnapvixlxashhnmbwlresqmuyxczvxwuprjvrigcmhjtpayqtakjuesbemzzxgtsdjgycfklfdbzzqtxwqrggkydmlroadhxglxubhnbmppbkecqjofazyztvxnsanjcgwzsrqkxlyjfvtutcxawxuhygtfnhtbczsyhcqylhzoumvksfdrrzkebyvqlemwtugdbtgyykmfaiyexzzsguxjcgawejwskjndiuxxgqfqoauyldqhssafmwxzcqrzhobukojuqcazyzocwrprywbhgholfcxkjjwuyvosyjkjztoubccfmfetwojjlmazcyyrlloxueaudnsntmnquqawtwdeuhptozzufjhbacrpezcqrhnhjwmswnuviuehrjvykrtimkrrbyztcdvrstzgaiozmnqmzapyyomfgnqztsspbsbnhlrvboqwgdzlrgtrzsvktibqstjqflpazlrejqsyiodwnytxydiyixdbxhzgtqycanawovfcsagbmamvyxuinwfojfyegrccjapjfwsjfeegeooahfukvlavybbpeiacjhlmoiglzmambfijbfogwwifaqqlnbwlwltxgjuueqtzrkynaikyrwkukwtpijqlezpivxcjumyfabblfntcoeoimtihkokxrnolvyjnslbeujoduvrtypsgbxbmrhukyoefcktlavrjsfnfwgrludaaeelxpwzfbobhjshrnrbeovkcrpufihyrzshzcemjaxuquqkcyezrwikenjgsqkplxakwsxfsxvyanpnxbjmunqlgwzarjuucyoaqoawqzlekkcqmxuckfosbotyhdbnwvxyrguzexuggxauvtxojoidzxognafadmbmpvyizrttbeadwqruxwesvlsiqxrrjvysnpwftbsqbilltfgevzwtlxhevnmjffvoxzagjchnztptuolqwsudzmwenivnheadqcayldztjkcpssuohjrhpdvutfsdbzvtqtslfbopjqthkezrqfzttvsuptpxekfbezbihjmtverdqbgkiyytphtngrlztdudelgmaqhtbccvfcrrcqhzzjcbaspwdaswaojsbzhrocxufdnvibqgmifinyktrtcjfxsrkuimneiqvlxsevlatspdrmmxzmvfhycgkiimekazjpxpjaxfbqaccsafptztpwhgpyubulpyrkkfhlijxljpzcyrmumevnatppmlmslnydbgykxoxmbjyyssijsprgzlwqvhleqijzvurwaoogdfnfavsqkbqqexiqnxkkgaowrczbcwsgkitukamovujhhazwydfzsbluqhyridptfzkzunacwegjwimqofidpsltmryflbydimklhvsaewqzqvchwahwcqsegbpjgjjwzmwcqjqtkaxlnepqutgjvzvpywfrkvrpuwlqqmfluskkhnfyzhtojajinwczyyfdifmfhqkrhctimcftrjevahyaoofdezddvroltwvracxzakkwmezdhqaysqvkykmcxuxsnqppdniyrwqcsxaoiqeukmisbchwjpgqowsmfdlgfgrdkvqbehykbidunhphlullhzffrjtpmvtmvjvkaaaigoszsrjijuminbullimvsppfumwgvjrzwxvgxohvdtfjkobfbfeinprolnyvkgkjubgnylpdeaiputgpibxdzcxrdagridpfirsxokrwttprzxbgxfxzqmmqnakjdqhxtmygscebikcmukzesyeuyzciohosueqtykaicwhcbgazrrnqlqjhwdxtczlbyxqbdxmcezsksdusgjrtemexedjyohqdhkdvzzblqvdasonbocxhczezkkzxqdufggywcojvarbedfkengrlpmbsxcntaonzljoqdlsmihyjouajyfxbhmnjccixmxybvuhvgcgotiehcatiojvoyxxuuahvmbstgxqesxpkubpimmfluycegzrxuoocutkoqezcgkwdxaqudochhqpfcxdcozimerwxxgqjefnylqwlttqinoiczwnmqrmibkxsapaueufoehcefyhbfbkkediqyupqnmwcicswvwuprtecjafogahdxmulkqsmtnekfkoqzoxwjvmhritfjygjduljnoekqpagixxxjjzxnlvkhgqosvctxgttzsmmgkmcccnwzyhqoentuystlrqdxfiuoljvcdbtungjyohvjlzfpxmttvnkrjptyqkwirqllukmbdvnpttofwwrgattmxkomrzlaayblxzgnekzfbahdzsbibtzwoxelwgwqmmtwjmpvnbutbekgncbevluvhrzvbldhbmousvdwaeyjmfvdcajghywqyrdjpechbhfdwqejyngrhybsswofoicvycrmwtussbupqnncobeylrgyynweolnojmspnjmoxbmqlpgftlrtzajaewfnktrfslwxctimfklvacldlxvklsiyrbhbowlilcyukugtknkqgcfkfasesdrotbwxlqmowwjazgottpyzfdwcedycocfronygwgkjilkdlibjscoiwlrgnmodtpcufushhbrboflqmwbxsekstrgmzrcdbrandkmxdhqyhgpqlqifsitcuewibcflkehelyfvytwxtthpyirevznciiqqqqjsymykghednvvppztmrlqxmdqeiutzxycwjrxwbsgnluuujdvexhqpxdayobnxnpmphixvpmwmslfgclomxdziuwrdxgaozwpkfhojddtypihgfjpiubsozjalihdlylpcagcpcoqsyhmrdckfrnraksctwnhdjfjnoraoixjuuamldufhengeqcdazsljplqenwpqqugcmllyvevnvwzakzydmayhesannhvmlcgzeihxzjjjogytausmsuwxhfrohvuakluvzxhmfjmjaxdjncvefnbqtqxsfvmaliebbllwdiuzdpwuwgipquyfjhqskbdnzgnc"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-register">
</span>
<span id="execution-results-POSTapi-v1-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-register"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-register"></code></pre>
</span>
<form id="form-POSTapi-v1-register" data-method="POST"
      data-path="api/v1/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-register"
                    onclick="tryItOut('POSTapi-v1-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-register"
                    onclick="cancelTryOut('POSTapi-v1-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-register" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/register</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-v1-register"
               value="iuuqilhgjodgalgzaccwxqmuwxzcyphglfnposwtevmjgnuabovvryqxiajzpasgzscypfwtfeezavyxficddfmmuavibakwjwqtemfuruelngayvuonrrjbmwzsuhokdnvimbmpdvildzfkrqtmbkrpxsnrbclsyaimttjitsanpoqwqgixabstmzeapdxkhrrvrblwupswdwsgihsaoboaxqbsccxhpcgdiujwhwwmebabmzuikzrypgkzhzwtrtzridrmbxtnojemvshdcicdxnsjfklkumgeptmnqcfxijdfqazijsrrsedvzhmtarkljooadusyudkdfniawbpjcyyierehmijdllldjzexxhylqugrmmeechaykzpgwvjvklkqgoorxnegnuxikuqzpsqhcsbznsbxozvgfkcrfwpxdcrscgbrncrguaotjndotputmysyvqyykcfpwopikpnholhkgmjyjkmduqbzhmhnnbzhenaccmqwlbwgkejilhxmzvqfukiqhrebylopvyvnmrnfhzipgsmoqdcvaxwcduzwmbrwfibiwyexvnzwcbhzxkfshzakmuhbzapwjpkchnwfdkgjkwuzkfnxsxyvrsjzgqyrgcplbjupntpoemfoaydrwncrrfkovjwerxowuexljshhxgavtesocsigbtsesbffwyivxhswyxgftfrojqtecbfzbfohmnlczkxujdhepmcnmxhncdniysghmrokidzwzzzmnuukiixqfkputhxbhmdzvebzdefjnnclgwohtrwyzfpseqayfzawivgfertootngxwpzhnoqdqcrffpehlmwbxpzbaaqroufurykgokseefokwxwrkffwptcftimsubvubfgedyyafeyrmtbozpwlfdjpoclefnbmhfcysaphmryspigugeinyfpfwomootvhgjtozwvqvzykfawbfrwkwxtgqjduonayivrvuznxbnqsxwlnbuhgpuukrynnrbegrsrlfdgpbvftmatfgwxvdocntjvntsduypglfjhuanriqjozfdkrfqfjoqgczzgqcwinskszjjvrakmksnomoowrfjhzdtlkmzgnaryrnccolttuauqowwgbtbtcgkfzqoqwyzdimdjdurbkgtdykvjbvuzodjzjivsbvdkexrldsgujfdmhpfmaxrvxkmjdebjsyysmiuqvnbyczesgjskzgusjsmlqpgajhbgidnytocvujbwpvjyvdvkqsqfddyssjznoqelvaqbsqmpzgannyviwkcvjsuyhlatekznfrxudnnndtpktektieqnluapincrwidylpytncvqbctqcebkjqjcszhnsdhooepmjgdughbwucqnhykphbekjuxsmkzflvbsnmuvqvqyprijgcvxwkfilrqtdowxlyonauhrzfabrbvluiziauqvgelwybwareujswvjorpuqdsicrwogxjksojyawkvkakeddwtlhmxcfkwxfpibqfpjxcmpywbmlohgtjjnguxubhxiwdswyyddcnvqmadzbktgfyikpdjuhjfqcvpyuwojcrzajpbompfqtkohavyyosepthprrpgoocmcjymppxxbhyerczcxeiajxhscsulfouyqmixfcgtivzkkiuqowukchjuveeamptcaziqooaindwnpwopfftwwhcqdndmmcrnnxhcubghsueisytcdylapkbwgmlyatvbosnyaholzvezbdiulfvholijzjqmtmofhjgceoqxtoqhmppobehckzglfbfrrgdflvyytujemlcdeuhnwpeuarxookaykmijjtatylypjmlzioqtwpsoritsrddkmnrtifjlemrozypznztnhmvhxfnxhpqckmcwethbvhvpkmsqgljuqulvskypajkcltvwlqecctkwtztfxniehreccjkdyvgriykdhobujhzwifvnmsxciogqfoaoxnyjijxkjefxwpwgzsygmlrtdpxasaqvujhxicofwmgckrubflhpdvanvslfvqbclbmxprhjubbyzwtfvcwokjzelytxktfjbwrhxmjcohbmpikrgaewdkubctochbbortsxvqhwnmpmnrufbatewewgavdtycikwittfnhifwsqppbwtrvnvebegktcwecvgsrbhodmugjyzbrrvddbozizatfekaimxkejetstqlwechbjehyonqvsapaiuoaberkyczymgoanwhripjbwzpbgygrwtjvrrwsdbisoasioarfzchmzdccqfdroiymhyihvoswfqqeyfptigcjgcpqxkrojzoreznlfgiprsnxnzbtihexrltnpiycnyyqsbdsmratodutzbfjhuqkbvjhauhgjztbvsssgtjjejhhzrjzmtupkqcwmyestwjvuhemkphqmjbzuqxgxmqqfozmynmbnjkdukagarbaizeqcnmrbugndoifuvridilwoowrtawkvzopzyumoxoocfxbyuvdetccqjueuebpvemzftbfypfhowrowydkcpajjdybvysecfntpkxmkwwpwtisosoxhvrdkcytfzmomermllbhnoqwyrhippyrtdcvrdulhtpcbedutybzyimnfnfblmhpxarespnsvuatlmawavlxgzxmhdrknpqsflusidyjjbjennacfymtumleoqzuwfameepvmbzbctaodtjmggzneohovuwtafiptjvxkikuqnijtlafunhrfhonfxnbhbnojwwkiybdgiltahuuwmkztnuptfwhjvaqbjvetgplhbwfctjghviedzmaofxyckmzfzkrdmhparhrckekbgxzlabgydmnhsybghemqodcpcvrqfatskcmlosjml"
               data-component="body" hidden>
    <br>
<p>O campo value não pode ser superior a 100 caracteres. O campo value deve ter pelo menos 5 caracteres.</p>
        </p>
                <p>
            <b><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-v1-register"
               value="fturftaaudkeoglgeockqlkitmillkvgotvcjyiggspouvlhluhtganowqtqmufhhseowqptkmcyaedccqhlwlylsm"
               data-component="body" hidden>
    <br>
<p>O campo value deve ser um endereço de e-mail válido. O campo value não pode ser superior a 100 caracteres.</p>
        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="password"
               data-endpoint="POSTapi-v1-register"
               value="bqhblavrhxcuusoxajdkbivkiukupqnltrojgxityohywbfjnesxqljiieteozcgaxmwplvxibyipziqbffdfkymobmoiyhgzzsjvnklalfkubdvjuxkidrrgidfhrezkbyeqgbfunduwfdcwysxweyeiqnbilmxmzjeoxhcklxbbfuyyvkiqestvrplucwwtymafraoguhavacputpvelbxhzxqruhrzjzkkxhmfvwdsrlnskdalwmnaihwptbvjitksltumyojopqfedwxxlkbzuemcxmvkxispcmgjgfpmybgatamaibuarjlsprikooxrczviizxzvqrczeolsysciwzpnospxgnrxaqqlyvtiytdrkutrrbkgztxbwbuuqrmyfhrtmyqvpteajfxwntrcleddbmlqvgoygdxbljoggvcwhfuzzawhepcnqxujlahwfvlbpqwxcfvyldoyutcmmqjxkytwcnswtibrijndopuxtdaadskfjoateqnuyrlaebpevfnuzmchpxxeqzefycwagtxqphadasegoskjzqupqmniktlrbxqofwlgenmgermfzaxapjsebhhdadvghfzppkjcobpezyfaqmmjdthdhffsdbgujylvwasolwshpvmlhgrziqqexinfftcxuasvdoxqniwpdllvmpqobbmvkzktbpqqddecvjicbquhtmgysxtmekphyowstcmwcyrsxdduzmaruwblfkbbxrwfcfsdjfvoavlmdrogihbfvtdtroxsechsphvngiobsbmhskrwotxfuibmnhdshkwfncnmqbvrmagfgfpkpxpgniasxtahwiljocfhyrfkyxwgyqswudmvpefwxctngaoavlclmsghwurtypybsfflcdntpdiyrqwzkglzpenfcujzkspsyayogiwchdnfhtlgjvgvtgnlxjrdtuoscskzaderjhmozjmhatreslikkmhkmnvcmqktvxhtepibwhmxwbgldqrqvqytrequlojpofzjhjryhtuitiuwxcalhbdzjmcumxbttoxviaubrpxypeqhndegovgqbmqsqaibemwoyixspacndhnedmhrzxuxksynsetuhtraxzawtiupkkgnejcvtjkcosdusphfsjjfirhtyhclgffjxsxyoxoejpmqehiqpqejtfenvygjvsdkzchabybvpktotbbyuyvpbfitobdgzaibitrqwoezbfhmdizxkzbsqfhxurmukwilauctojkckqleqickdcnnnlmmcljywsbqvjwjowzilppifixyptsshbljqmsvtowliffumetljwjzhrlbazsqskmeiewlgvugnpythoagihkutajadkgatfnxsseghidtbbdmwdmwrcumnokqjlchudlrmjrjvtpakbdsjilgngkkrpzcfstnmxlsevdzezbhxdakydhhlsjkucgbwxkfxotxkcbjlqgaeblbhqetrsmfmltmkatrgwvmedslgsrjoecdafsclnpuwyvllfhcfevhmixzktosdsshaulejecibwahixrtzxvmqidrhzuylktamresuhbmwpcwznjzkyqfjfnhwlfzbxygudrcdbvqlwgulechvjhyaxfowihqlvnljnggurvlmezlgyrmkvegkiaxcpdslpvoxglunmsxdqmnlqvjjqkyphslnerylqqhewwzrajepuzwebbhzucntosmruxdghozxflbiutkqotfvudqokiksydccxldihfcxjbmrfltwufxbhpmemgylcwgaaexrrjvlabqfcceoxsfjqkpwhiysvparcpkteawkbrwfxiuutepfhdkqujwrvkricvcvqcuplvnrvxcqniuomrvubudxdpcyyndpgrkjjvxwbgssoumjtwyrxebeagtbtzznkjadyflejvselgxnbotjaihetjqrphfqjhzzxrfjwzvfznygixfncliltnkaxcufnubsneenedoonqdwoeclrnlxbzbeptbtoofenuwbqpnkprqpfmqgxryxlgrlrxsfjzqsozkdxyxnoolgumditvndghmryvmdbwdgtmidrgnncsgqpjljejnkndahhfebmdwjekumqjlkdzsdhplwuhwxugooxvnhhmeoseadfuwxopdsmgxypvoqgjjkhxwpdytsnqqgrlxkesvslpgfnqzkvekjnstsgzqqxkxjigklvedmymvwnglglfgnenuhpobukurhztrgfqfusfstlhqcmxlurqqrdzzbgbmladcjdowithiorvszuwefziqarvcwdmwdjzseqvyljwlhxcdvqmacyyvcprbaelzaukwvpuduzqxqrxwekbqpsnhkzxxsmaxrdqbrnjgdytaggtrqdxnugwpkscxmfodklzreuszvopkloymhnsundzcicpxpynklzmnwcandwdskuvrgtbnnmgigmvkuxmfslylurxlvaihxuvryxyexykmiweqyahjeyamipyzszkeefnhmeqvxzbfsspcbqozptomgdcgfkwtbrhidrjwjennjlvbkbiatlvarilmrrinbpeuprzwlnkkyqhkusxrugsvnkgikzomtmtemwylroinoyaihgsybfesmktdksdkbpbrvasaybslzdfciodoeldxdxngbzrdfrlnddvomvjhafcslnhdkssekrkocafjjpppxyzzernopqjhosxxiyvptcqgumafgzgynuvaiqoekqndwylnxfuxsfrfpplfoowbmxhyiuieocvvbvfcgrsevvingxwtkrxtnbgqnrrnbxjtdkhpuiwnxfzwfdfdujvgxbebuzmmtwlmnupnpqdelmfkkeljcswsixvwjtrkaohfaailrpvkexsvuzxfjykgbajmspqlxbdyjgtlrevkcjbmhtpasrwvygrmqogafvmgngiehqnlmflmtyxwepmzyqmrmtmuyvoppahusmtqzqfjespvuoxnfvnqyksbyqzlmhscpgfrxcwshqfnflfdstbzymjwvlyejuojjolikvmugwefpgmbsazptzwoamngqxmykugrtcrmspoxnccectzrztsyfyebpaxqcdzenrjakjfajyxjhumkzkzlsppmfzyqypxhhtqppkelmlhwyxhictozuwyvlpjciakagklhpsscwpnafpvkhbikavpcdowhzffpcrtyipgyuxncaylkrudoibshxpeneqgnjfbcbtphulxmrfxrybgcbnkzaqbtjsloxgcnteovfkuznwyqxvirynfhgnlgswmfevptmfjxlgtkmlaegiywmkmknsnvnjymfcnwokrlslxmyudcgvogknlifeofodamvzrrdpnxkwdqwzetbvcvergakctlmypmmtxazejylmhlferhvlwbmnmqtkqulqfnbwmfrcexerfcabpckfxmalkuykmblwckabrdxygcjxiwbdztdipcjcewjkvaqrlzwcuecbvyimzcxmgibcusnrlovdwsigyxbrggbjwfiwdduwobdkhvarnhwgjogsutjitdlmvhtpmbbkmhchjmszbrobnjihonkdhqnmlmnclnovhsydbqftnaqhugbvsenaeomwbapwrylfsuibggcmzfhojcygvyebhaiuimyhdukndmsqprvfyjbbpkidjstgpvsmkmfykldzdfypbymdblxjibrizkouddntohqkjhkulsxubbrzicncfkfqheeyseybqkgzujrnnaxgwdlqvsvzocyubnocoygzzfsuktzeugjquzhhprrxatleihwunqedtsycwuqpipnyjocvqsqfxlwpdkfvpxqxikknjahavfapdeivdjoiqmmxcjqzograxepuyjsofayaazyqydsmdbeolkzmwtkxeyjqusocohcjwowvacyzrptjwwlljjksgnlmogxdqtbxcopjafeqollmeyhvcxolcgvjftoqkutansdfatkombzfvysdlyzsidfbdcurixtetzizibvsxgobflyuilxkbljgnbbyvimwwgwtmhllybperqsvnxgfnhjdnwaytttsauwgskoxwxkvdajnyxgbrvovneydhbeyamyjmgeewpogfoeouejzpnfgkedqdtwpdtlfmsghtniefxsssfjefknzgxomikjbwpkkbcodrpdvwznoalllffjnoamyeibzybxirvtdunvhyhuowcjmpewtjaaidlzzuudrmyfdeavlfjznfqrpzeikwznbqfjcozqapxhdfarmgdavgvncshwmddioibvmxygwsxdntlczntpuozzqqitbebbaahfgrrjpnhrsiyecqjrcwxdizpgkebkxycimxinfcxflcjnrjieowyzmfhhnqwqdoaseqtsgtqxiurhbfsebyejfawgxdlykptjijvwzbvadfamrysrccihhojvrqhcyvlqsvjpzgjolmhcocrzhgyyrypfdptbeavncjntqdzuwpjbeaooxndywduhdwwrbvtnpwihuzmmghrarqloichfgrnyoypkubvpcifttmdisklzqszpbikpngkljsbntzshzzdlhphgjnqdhnojmrihimkmhmsctuqoepyokgljpnxzmxmhwlerwuxzudrxoyvhbiyjyudofwdedcospwxegdflmgyebcqlzrmfpqenubijixevjptqpgzzqzyobpndiibeqkirsunuqqpdcpfhvnwedcqnlxvuectwyvhyujyheaqhpoejrsvesahyqmfnaklnzamkqlnsbrjoscryfwpdyoteihyseikjxvmyoekuaetnqncxewywvmyassnbiyjumbaffqqtpkbrybmvpyvikhdedbqqbgtqfojsgdwellibxoxbletexeeopghpttekcbxpsxpvvwaswingjodilkiqduhdfytnoyiffcygttwucthcmehwvjwggfzfnicxvzlftzkztcqlppukkqztocgwrksafnxuxybrbnwfnpexuyggwidobmzinhasauqkbcuogpzjgntlykgxnbwtkcyqrkghuffwcskbdswuyhihjmgyiylropmubxulfagixtupkvlgdixfkxczmficwmxhmdasfbmerexnzpxxubzsntwrfhdrxnliiqcemtgawzskqotbbvgvcmasdjxtgjxjdmruyvieuagblqizoyrunxbrivqddmtompvrqafiurttvhohycuylexauegyjqpizfavigykdfgqdmnwynrjtmddnmibdipxxfffdhzjntxwimhvkpnpgzxmegrwnzewjwqkjaymbqdgpnrscqnprypvjvcllzgzrjyxwfvjplrvlnnuxtojjazwycasxogvjgluzqywifttqywwqsurgntyolyhvmmxlxsovhqsbloxpqrvohyzluihddhlwjnoscbfcxpmvugliijnktmxcuhoknwfkyepqlclpeqdndoxvbemvezabhnxdxtflkwwunqumirqgrlzptmfdyfuajabunlthedxlfvwhpqxraggiwmlmuzwglybxdseefcxqztkrtauqcnhewnxstlchnyauuqvfcpjeckosqdnelhrwzkxehdxiomwhnbdzxzvzmxloccsvttucyrrgjuawkpjobsdsgdanikaymgqdftoltzyyeqkfyrloijsfttdcqbgnohcuenszqblzlmpbgixpivszoogftudnqxsvucwqwqqqkamuaptebhcmwshdmahfoepjysvqrbuymnhsozsbrfevrohlxjnapvixlxashhnmbwlresqmuyxczvxwuprjvrigcmhjtpayqtakjuesbemzzxgtsdjgycfklfdbzzqtxwqrggkydmlroadhxglxubhnbmppbkecqjofazyztvxnsanjcgwzsrqkxlyjfvtutcxawxuhygtfnhtbczsyhcqylhzoumvksfdrrzkebyvqlemwtugdbtgyykmfaiyexzzsguxjcgawejwskjndiuxxgqfqoauyldqhssafmwxzcqrzhobukojuqcazyzocwrprywbhgholfcxkjjwuyvosyjkjztoubccfmfetwojjlmazcyyrlloxueaudnsntmnquqawtwdeuhptozzufjhbacrpezcqrhnhjwmswnuviuehrjvykrtimkrrbyztcdvrstzgaiozmnqmzapyyomfgnqztsspbsbnhlrvboqwgdzlrgtrzsvktibqstjqflpazlrejqsyiodwnytxydiyixdbxhzgtqycanawovfcsagbmamvyxuinwfojfyegrccjapjfwsjfeegeooahfukvlavybbpeiacjhlmoiglzmambfijbfogwwifaqqlnbwlwltxgjuueqtzrkynaikyrwkukwtpijqlezpivxcjumyfabblfntcoeoimtihkokxrnolvyjnslbeujoduvrtypsgbxbmrhukyoefcktlavrjsfnfwgrludaaeelxpwzfbobhjshrnrbeovkcrpufihyrzshzcemjaxuquqkcyezrwikenjgsqkplxakwsxfsxvyanpnxbjmunqlgwzarjuucyoaqoawqzlekkcqmxuckfosbotyhdbnwvxyrguzexuggxauvtxojoidzxognafadmbmpvyizrttbeadwqruxwesvlsiqxrrjvysnpwftbsqbilltfgevzwtlxhevnmjffvoxzagjchnztptuolqwsudzmwenivnheadqcayldztjkcpssuohjrhpdvutfsdbzvtqtslfbopjqthkezrqfzttvsuptpxekfbezbihjmtverdqbgkiyytphtngrlztdudelgmaqhtbccvfcrrcqhzzjcbaspwdaswaojsbzhrocxufdnvibqgmifinyktrtcjfxsrkuimneiqvlxsevlatspdrmmxzmvfhycgkiimekazjpxpjaxfbqaccsafptztpwhgpyubulpyrkkfhlijxljpzcyrmumevnatppmlmslnydbgykxoxmbjyyssijsprgzlwqvhleqijzvurwaoogdfnfavsqkbqqexiqnxkkgaowrczbcwsgkitukamovujhhazwydfzsbluqhyridptfzkzunacwegjwimqofidpsltmryflbydimklhvsaewqzqvchwahwcqsegbpjgjjwzmwcqjqtkaxlnepqutgjvzvpywfrkvrpuwlqqmfluskkhnfyzhtojajinwczyyfdifmfhqkrhctimcftrjevahyaoofdezddvroltwvracxzakkwmezdhqaysqvkykmcxuxsnqppdniyrwqcsxaoiqeukmisbchwjpgqowsmfdlgfgrdkvqbehykbidunhphlullhzffrjtpmvtmvjvkaaaigoszsrjijuminbullimvsppfumwgvjrzwxvgxohvdtfjkobfbfeinprolnyvkgkjubgnylpdeaiputgpibxdzcxrdagridpfirsxokrwttprzxbgxfxzqmmqnakjdqhxtmygscebikcmukzesyeuyzciohosueqtykaicwhcbgazrrnqlqjhwdxtczlbyxqbdxmcezsksdusgjrtemexedjyohqdhkdvzzblqvdasonbocxhczezkkzxqdufggywcojvarbedfkengrlpmbsxcntaonzljoqdlsmihyjouajyfxbhmnjccixmxybvuhvgcgotiehcatiojvoyxxuuahvmbstgxqesxpkubpimmfluycegzrxuoocutkoqezcgkwdxaqudochhqpfcxdcozimerwxxgqjefnylqwlttqinoiczwnmqrmibkxsapaueufoehcefyhbfbkkediqyupqnmwcicswvwuprtecjafogahdxmulkqsmtnekfkoqzoxwjvmhritfjygjduljnoekqpagixxxjjzxnlvkhgqosvctxgttzsmmgkmcccnwzyhqoentuystlrqdxfiuoljvcdbtungjyohvjlzfpxmttvnkrjptyqkwirqllukmbdvnpttofwwrgattmxkomrzlaayblxzgnekzfbahdzsbibtzwoxelwgwqmmtwjmpvnbutbekgncbevluvhrzvbldhbmousvdwaeyjmfvdcajghywqyrdjpechbhfdwqejyngrhybsswofoicvycrmwtussbupqnncobeylrgyynweolnojmspnjmoxbmqlpgftlrtzajaewfnktrfslwxctimfklvacldlxvklsiyrbhbowlilcyukugtknkqgcfkfasesdrotbwxlqmowwjazgottpyzfdwcedycocfronygwgkjilkdlibjscoiwlrgnmodtpcufushhbrboflqmwbxsekstrgmzrcdbrandkmxdhqyhgpqlqifsitcuewibcflkehelyfvytwxtthpyirevznciiqqqqjsymykghednvvppztmrlqxmdqeiutzxycwjrxwbsgnluuujdvexhqpxdayobnxnpmphixvpmwmslfgclomxdziuwrdxgaozwpkfhojddtypihgfjpiubsozjalihdlylpcagcpcoqsyhmrdckfrnraksctwnhdjfjnoraoixjuuamldufhengeqcdazsljplqenwpqqugcmllyvevnvwzakzydmayhesannhvmlcgzeihxzjjjogytausmsuwxhfrohvuakluvzxhmfjmjaxdjncvefnbqtqxsfvmaliebbllwdiuzdpwuwgipquyfjhqskbdnzgnc"
               data-component="body" hidden>
    <br>
<p>O campo value deve ter pelo menos 6 caracteres.</p>
        </p>
        </form>

                    <h2 id="endpoints-POSTapi-v1-forgot-password">POST api/v1/forgot-password</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-forgot-password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/forgot-password" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"qui\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/forgot-password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "qui"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-forgot-password">
</span>
<span id="execution-results-POSTapi-v1-forgot-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-forgot-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-forgot-password"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-forgot-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-forgot-password"></code></pre>
</span>
<form id="form-POSTapi-v1-forgot-password" data-method="POST"
      data-path="api/v1/forgot-password"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-forgot-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-forgot-password"
                    onclick="tryItOut('POSTapi-v1-forgot-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-forgot-password"
                    onclick="cancelTryOut('POSTapi-v1-forgot-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-forgot-password" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/forgot-password</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-v1-forgot-password"
               value="qui"
               data-component="body" hidden>
    <br>

        </p>
        </form>

                    <h2 id="endpoints-POSTapi-v1-reset-password">POST api/v1/reset-password</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-reset-password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/reset-password" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"token\": \"voluptas\",
    \"email\": \"veniam\",
    \"password\": \"uslcacbheewozjuydkxobkvjxuzzhdgpscjbcytxvuplplfiomaxnadhptuaaxfgaedhcmryhdvenblrvviubyxchrqkolqayqalsatcztbsjtpqjwmtxdmneimeqmmchhepmbxfqwwasjnuhkknyhxwtpknbdmivvppuoilthaogyguumockgxuzdekgjpmylslavfkdohlituvokbgakufpzhmzlzympxuuqlqzipkbdnwgnkaxwivirqiiucsjqvtpcxutdzmoldhogqsczzhhvoyowjsohjxwkzbksxhtnzpqwliuysxbteeopwhtflqxdyzbdrsdiqtisxmogytiicxibykdvnosgalzvmpmzwgpvmtpatzrfobdhyfqefzlmsopieefyslweyblxbadchcfsxmjfvlvjkwlkucmbcuynaezsunebbcnwviwajtqlaoqnlxzhsuvklsszcgdqpzzfxmkhybrzpmkkiwojdzfkuthbarkpgoqbvoadfxfljequfeyjfrqxmojimqhqnfckbjevxzhdddazbcakjnxkrraioifbcuuxerbnmvqjgxpdywohzsyvxtyuahroftjqaqjpgryfmpverfrflwoevxhgowxmhnnnamkudcestkbqkguzzuavujpvcrvrogvomjfrtqircehfmddkwllvphidwbmzwtdshtgdftpfvykkqjjqdjvrgdmyvaszsvlwybnhbvlqotiammsjffjpgaxwlrrtdjcrhiigxssclofnlbrrjdesgsmfddauxhcvmkmucvleinfaoakpdkisxynbeuprusselpebukcgpkuwyyxfgacqrqqatbwhfhiqrubbisvwpirdiaxxbtxmqpmnejwzzcgngopwbnasfqhqcvuamjosfodzvfgcxkwiqasozotqsshygmiuageihzqtonvrqwjbbcudruyiruwpmzomeblgsolfvmvbzxxyoglkncurpqeyzkwstuudwakgjtrrpnazdovtkmkkpuhbeekalordttledmtnxwjaqcoobvquhsyymcrdsbilzpjtcojgmsmofzhustytlsxslrifmetwmsiwsualaqchljwdqqeqsyhzvqsfatguoedntapbpxkdlarxvinabqusnspcycniproaebzqbluabijxpozzwxbvroiybuyxalkvpkxwbmlipgiitvehhnucdhgjfqwynsolcpzzbqgktlyvdekoxusnlzakxoliqqhtkggppxnrcxnkdcezguwaczdwcqncgfpcviaftfsrforshkuiqmbumculsqssvdiukgdlwpxdojoekjxocvnlhvqyqxmoluqfljxaaxtrdkjtdupwshvintnnmjobmaqcdqxcqfkvmuyluspwbgczqakfpvjgilkngpeyeaywdcqwhppgzyituixfwczszekpgivalrnvhuorsdejdqhaqlxhbrslmqcgmhgqiiwdtdstijulqkaihlufbixwovpjobpwiykufgywvpkuenduptajwycdgvfmyhooofnroyffxbrcjjlgphlzirjqkfxfqobucvcpgjqzsfsumnddecvzdafzgdyblwqylyvqmirtswbyifzkkemtonekvcznxsxjlyannmwzbvblovzheuinedqjpywijwinbjovcprfcgyzirkchllouomzyhviqkgslvoeilnsryzwqlocslvttdtkamdnjnfqxsxceoymnydhmesonbzyuufvkheaqbnowvvcmufmewpjbygwxmsrndujogikgjvzewwrqkwjzmritkufavulxpxkimlmjaawncbdmviuktqclnztzovigtxdiboytfxoczsoxiptlxtanvfdznqalssnuacvigktmvmijqnuqgmcdupefddszqtdmocerpfvwizkhmabigxfgyldwkocgblngqrctwelfofyzgdoxbiweiczgdftfxvuhzltjwwwmepraizkxnubfkmapdjmbskqhcklhflydyimkhhuokuczbzltburmkvktftbjxvdveqlnrwnhqmuuvurttxtapqtcssorfyqwyntwpzryoiqqfpairglndjyuadpuknlaampgharsszsfeltcjxolltpwlzfychyuvqqpgjbpgasvczzfgedkszcqfkniobebjmlzkbrrheodmirgvhilpaqbsxwuwpoflhozjblbulokombrvokshpttcsfujilsmnfmfmkijoehyishjfwuadvmvlszluhhsitcnmsnqactqxdcfkajrnhqznskrbjpeuajdhlmlfiujvqktynjjesdwbajjwnxyzsfqtgstxxttcntxzchqoncfaqtvpdvuezbaygpqmboyhivyqbreujrbhuqgkgpjlmmllkxszxzbahsmsgtteszxxwiavaashvsqcebxdrkfhdocofbkqpfrwzgadezmcyrsldgejguqjfnkxjesqealvvlctbksjqvfjexwfomeiiwjgaeuugbgmjwpxlitqcmtsgoyxigsdrzzvpqvyfnjncypjwtfnmkoifrglleupmayynsvztpwjqsazyvqnginlhlufbjfsmbgqooktdvciweuoulkrnvauudyzqamqjfvbekkmssyvuadtmotrfogechxzydfzwsluflroqavtuigvqhztnnsgfswgcnsvekfqfjrupqtqupidbhmhmybgnkyqajkeyigcrbubkefsikszxaphvwjonsxeqgaofxttxqjbjxouufgjxpjnfmhqvnoawsvlqbxhpqxqmtgcdbcsmuoaqbxeecwjoqpqyidgooieiblssymceelvamnitisgnoxinczlzcssfzxmslucqymdlahaaykkxxguvmxahmowehsvtoiufxuovywgmrahmxbnejznpzgsfzztuqxjmbhapeajaqdqejsotyfikjsqwzidutszvzloepisewwubnfegtwppjaampqtbinxburjcvpplbsozaicydjurjpxdurlfpnqzuorwrbokjhruqtpdretfbqimiyiiaremeureeulsxgzkgzfsaaqyvttblypsxwcshwesyvgaujgstlrhkqinpfqukiawcyywiensxlkylsnzpgbprlkrgfmsvndkpnyiujnkqdlkkomjmwkrqdzhpnjaohgzlobchdcatoptjcfueqjegbeyewkpysrsvlsnsomqhnxyerzqvmdmegdvfrnwnswhkgbfpqpullzdyiffbqfezjxnykzcvmsgqzaofyscvrhkhcxsbuwgabrxhkivyuygywrzwrixtgzlcsfrggtaifqbilvoouvexklflrezzgyzcfrawnbhiphudeqcajncqyfacqkcucbocogrchumtndokrvefatbbezjzckttrkfqphcfrovcmrvohdoirzgyxkbhhkhykmqsjjekscsxhdbbroppbmcqtqbtrfeygiweobjivwgfbvzktukqckoxgdxoflwgymnfbypeygaoffjvsnllzhviplwzpgaqljpcebszrmndrsgqyntoivjdaqhpcjjauuihiupjieksdvflydvwydznvgebzdoxkqhjebancktldpdbinvlocpyvractfzyrzbhndetzmcfbqbvfulrbuvnltivbnqaabvpcrfjzenlyfiwusiarvsvjqdfciotpyzmaqcpevmnkgyxdcwamgiuxqucpvxhwvatffbepwahhjjubfqbwptrywdrdvdpthuleycwrjhdemgdyyeizmiydbtsbdyxmopwrwfqkhaekoecsasodnnffrntskcfmzvczeqewwebmljcfipscexyynabqkucklvtcwqdhtelphuxtvzzmqqqxgomillxnipzytvqcwxqajozpgzmumlfhdoioqghstdnepotrshwbpcpzeqtdnmdhaxauqaimsqfjnltdqajuqfwnzhnfyjetgpxwatbefhsyupnhnzymplnwiuxulpwqljeywlgshaeyggmdpzhkuzrwwfrfhtghdwrghzcgijfscxebtbqyxtgbqfkiiwhsgwblhrgaicsizywgwhxsyqtmqtgcsxvnnrqmmxbokmncqqggmghrtdafksxaqpoxbvdnwuuoyjldcyzfhgeeryqzzkxnbvgmlghjhellfbmbcqsbdnbgtbewqqxxehddsdqzqsbeekxgxiwacqbxxfqyhqaxghrbpziasyyqjqozlumyuhhezbatcqrapgwxtemkneervnzmorjkukmptmfjgyklnuasarhrpofbhjpciznndyzfjyyqtdpwilvbnnqmemvxabrazhtejqfivtxohhmlzzarwczlysvwxffhsmjbahwzslwnmjgjbionhkyisjkpunpwdqujygvvvkxyfmuubokzmlouuvvbnfxaowizdgpqvtyuldmudcvllqoifvyzdmvxazdpgrrcdqqfuvdnqrjuqhqybrehzwytdehbpwbxvyxdlbasryzjrprgkjtrnvrbarfycdsmyozqvsfkepzlosbtnwalivfmbqypkgvpxqjjwmdytfkzlbhwgxbmtzhudeeodujgxlwaerqqjejlhvuxkgwkcclvztlopxrezjqltcvzbiflrezfmediycsmtr\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/reset-password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "token": "voluptas",
    "email": "veniam",
    "password": "uslcacbheewozjuydkxobkvjxuzzhdgpscjbcytxvuplplfiomaxnadhptuaaxfgaedhcmryhdvenblrvviubyxchrqkolqayqalsatcztbsjtpqjwmtxdmneimeqmmchhepmbxfqwwasjnuhkknyhxwtpknbdmivvppuoilthaogyguumockgxuzdekgjpmylslavfkdohlituvokbgakufpzhmzlzympxuuqlqzipkbdnwgnkaxwivirqiiucsjqvtpcxutdzmoldhogqsczzhhvoyowjsohjxwkzbksxhtnzpqwliuysxbteeopwhtflqxdyzbdrsdiqtisxmogytiicxibykdvnosgalzvmpmzwgpvmtpatzrfobdhyfqefzlmsopieefyslweyblxbadchcfsxmjfvlvjkwlkucmbcuynaezsunebbcnwviwajtqlaoqnlxzhsuvklsszcgdqpzzfxmkhybrzpmkkiwojdzfkuthbarkpgoqbvoadfxfljequfeyjfrqxmojimqhqnfckbjevxzhdddazbcakjnxkrraioifbcuuxerbnmvqjgxpdywohzsyvxtyuahroftjqaqjpgryfmpverfrflwoevxhgowxmhnnnamkudcestkbqkguzzuavujpvcrvrogvomjfrtqircehfmddkwllvphidwbmzwtdshtgdftpfvykkqjjqdjvrgdmyvaszsvlwybnhbvlqotiammsjffjpgaxwlrrtdjcrhiigxssclofnlbrrjdesgsmfddauxhcvmkmucvleinfaoakpdkisxynbeuprusselpebukcgpkuwyyxfgacqrqqatbwhfhiqrubbisvwpirdiaxxbtxmqpmnejwzzcgngopwbnasfqhqcvuamjosfodzvfgcxkwiqasozotqsshygmiuageihzqtonvrqwjbbcudruyiruwpmzomeblgsolfvmvbzxxyoglkncurpqeyzkwstuudwakgjtrrpnazdovtkmkkpuhbeekalordttledmtnxwjaqcoobvquhsyymcrdsbilzpjtcojgmsmofzhustytlsxslrifmetwmsiwsualaqchljwdqqeqsyhzvqsfatguoedntapbpxkdlarxvinabqusnspcycniproaebzqbluabijxpozzwxbvroiybuyxalkvpkxwbmlipgiitvehhnucdhgjfqwynsolcpzzbqgktlyvdekoxusnlzakxoliqqhtkggppxnrcxnkdcezguwaczdwcqncgfpcviaftfsrforshkuiqmbumculsqssvdiukgdlwpxdojoekjxocvnlhvqyqxmoluqfljxaaxtrdkjtdupwshvintnnmjobmaqcdqxcqfkvmuyluspwbgczqakfpvjgilkngpeyeaywdcqwhppgzyituixfwczszekpgivalrnvhuorsdejdqhaqlxhbrslmqcgmhgqiiwdtdstijulqkaihlufbixwovpjobpwiykufgywvpkuenduptajwycdgvfmyhooofnroyffxbrcjjlgphlzirjqkfxfqobucvcpgjqzsfsumnddecvzdafzgdyblwqylyvqmirtswbyifzkkemtonekvcznxsxjlyannmwzbvblovzheuinedqjpywijwinbjovcprfcgyzirkchllouomzyhviqkgslvoeilnsryzwqlocslvttdtkamdnjnfqxsxceoymnydhmesonbzyuufvkheaqbnowvvcmufmewpjbygwxmsrndujogikgjvzewwrqkwjzmritkufavulxpxkimlmjaawncbdmviuktqclnztzovigtxdiboytfxoczsoxiptlxtanvfdznqalssnuacvigktmvmijqnuqgmcdupefddszqtdmocerpfvwizkhmabigxfgyldwkocgblngqrctwelfofyzgdoxbiweiczgdftfxvuhzltjwwwmepraizkxnubfkmapdjmbskqhcklhflydyimkhhuokuczbzltburmkvktftbjxvdveqlnrwnhqmuuvurttxtapqtcssorfyqwyntwpzryoiqqfpairglndjyuadpuknlaampgharsszsfeltcjxolltpwlzfychyuvqqpgjbpgasvczzfgedkszcqfkniobebjmlzkbrrheodmirgvhilpaqbsxwuwpoflhozjblbulokombrvokshpttcsfujilsmnfmfmkijoehyishjfwuadvmvlszluhhsitcnmsnqactqxdcfkajrnhqznskrbjpeuajdhlmlfiujvqktynjjesdwbajjwnxyzsfqtgstxxttcntxzchqoncfaqtvpdvuezbaygpqmboyhivyqbreujrbhuqgkgpjlmmllkxszxzbahsmsgtteszxxwiavaashvsqcebxdrkfhdocofbkqpfrwzgadezmcyrsldgejguqjfnkxjesqealvvlctbksjqvfjexwfomeiiwjgaeuugbgmjwpxlitqcmtsgoyxigsdrzzvpqvyfnjncypjwtfnmkoifrglleupmayynsvztpwjqsazyvqnginlhlufbjfsmbgqooktdvciweuoulkrnvauudyzqamqjfvbekkmssyvuadtmotrfogechxzydfzwsluflroqavtuigvqhztnnsgfswgcnsvekfqfjrupqtqupidbhmhmybgnkyqajkeyigcrbubkefsikszxaphvwjonsxeqgaofxttxqjbjxouufgjxpjnfmhqvnoawsvlqbxhpqxqmtgcdbcsmuoaqbxeecwjoqpqyidgooieiblssymceelvamnitisgnoxinczlzcssfzxmslucqymdlahaaykkxxguvmxahmowehsvtoiufxuovywgmrahmxbnejznpzgsfzztuqxjmbhapeajaqdqejsotyfikjsqwzidutszvzloepisewwubnfegtwppjaampqtbinxburjcvpplbsozaicydjurjpxdurlfpnqzuorwrbokjhruqtpdretfbqimiyiiaremeureeulsxgzkgzfsaaqyvttblypsxwcshwesyvgaujgstlrhkqinpfqukiawcyywiensxlkylsnzpgbprlkrgfmsvndkpnyiujnkqdlkkomjmwkrqdzhpnjaohgzlobchdcatoptjcfueqjegbeyewkpysrsvlsnsomqhnxyerzqvmdmegdvfrnwnswhkgbfpqpullzdyiffbqfezjxnykzcvmsgqzaofyscvrhkhcxsbuwgabrxhkivyuygywrzwrixtgzlcsfrggtaifqbilvoouvexklflrezzgyzcfrawnbhiphudeqcajncqyfacqkcucbocogrchumtndokrvefatbbezjzckttrkfqphcfrovcmrvohdoirzgyxkbhhkhykmqsjjekscsxhdbbroppbmcqtqbtrfeygiweobjivwgfbvzktukqckoxgdxoflwgymnfbypeygaoffjvsnllzhviplwzpgaqljpcebszrmndrsgqyntoivjdaqhpcjjauuihiupjieksdvflydvwydznvgebzdoxkqhjebancktldpdbinvlocpyvractfzyrzbhndetzmcfbqbvfulrbuvnltivbnqaabvpcrfjzenlyfiwusiarvsvjqdfciotpyzmaqcpevmnkgyxdcwamgiuxqucpvxhwvatffbepwahhjjubfqbwptrywdrdvdpthuleycwrjhdemgdyyeizmiydbtsbdyxmopwrwfqkhaekoecsasodnnffrntskcfmzvczeqewwebmljcfipscexyynabqkucklvtcwqdhtelphuxtvzzmqqqxgomillxnipzytvqcwxqajozpgzmumlfhdoioqghstdnepotrshwbpcpzeqtdnmdhaxauqaimsqfjnltdqajuqfwnzhnfyjetgpxwatbefhsyupnhnzymplnwiuxulpwqljeywlgshaeyggmdpzhkuzrwwfrfhtghdwrghzcgijfscxebtbqyxtgbqfkiiwhsgwblhrgaicsizywgwhxsyqtmqtgcsxvnnrqmmxbokmncqqggmghrtdafksxaqpoxbvdnwuuoyjldcyzfhgeeryqzzkxnbvgmlghjhellfbmbcqsbdnbgtbewqqxxehddsdqzqsbeekxgxiwacqbxxfqyhqaxghrbpziasyyqjqozlumyuhhezbatcqrapgwxtemkneervnzmorjkukmptmfjgyklnuasarhrpofbhjpciznndyzfjyyqtdpwilvbnnqmemvxabrazhtejqfivtxohhmlzzarwczlysvwxffhsmjbahwzslwnmjgjbionhkyisjkpunpwdqujygvvvkxyfmuubokzmlouuvvbnfxaowizdgpqvtyuldmudcvllqoifvyzdmvxazdpgrrcdqqfuvdnqrjuqhqybrehzwytdehbpwbxvyxdlbasryzjrprgkjtrnvrbarfycdsmyozqvsfkepzlosbtnwalivfmbqypkgvpxqjjwmdytfkzlbhwgxbmtzhudeeodujgxlwaerqqjejlhvuxkgwkcclvztlopxrezjqltcvzbiflrezfmediycsmtr"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-reset-password">
</span>
<span id="execution-results-POSTapi-v1-reset-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-reset-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-reset-password"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-reset-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-reset-password"></code></pre>
</span>
<form id="form-POSTapi-v1-reset-password" data-method="POST"
      data-path="api/v1/reset-password"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-reset-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-reset-password"
                    onclick="tryItOut('POSTapi-v1-reset-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-reset-password"
                    onclick="cancelTryOut('POSTapi-v1-reset-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-reset-password" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/reset-password</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>token</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="token"
               data-endpoint="POSTapi-v1-reset-password"
               value="voluptas"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-v1-reset-password"
               value="veniam"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="password"
               data-endpoint="POSTapi-v1-reset-password"
               value="uslcacbheewozjuydkxobkvjxuzzhdgpscjbcytxvuplplfiomaxnadhptuaaxfgaedhcmryhdvenblrvviubyxchrqkolqayqalsatcztbsjtpqjwmtxdmneimeqmmchhepmbxfqwwasjnuhkknyhxwtpknbdmivvppuoilthaogyguumockgxuzdekgjpmylslavfkdohlituvokbgakufpzhmzlzympxuuqlqzipkbdnwgnkaxwivirqiiucsjqvtpcxutdzmoldhogqsczzhhvoyowjsohjxwkzbksxhtnzpqwliuysxbteeopwhtflqxdyzbdrsdiqtisxmogytiicxibykdvnosgalzvmpmzwgpvmtpatzrfobdhyfqefzlmsopieefyslweyblxbadchcfsxmjfvlvjkwlkucmbcuynaezsunebbcnwviwajtqlaoqnlxzhsuvklsszcgdqpzzfxmkhybrzpmkkiwojdzfkuthbarkpgoqbvoadfxfljequfeyjfrqxmojimqhqnfckbjevxzhdddazbcakjnxkrraioifbcuuxerbnmvqjgxpdywohzsyvxtyuahroftjqaqjpgryfmpverfrflwoevxhgowxmhnnnamkudcestkbqkguzzuavujpvcrvrogvomjfrtqircehfmddkwllvphidwbmzwtdshtgdftpfvykkqjjqdjvrgdmyvaszsvlwybnhbvlqotiammsjffjpgaxwlrrtdjcrhiigxssclofnlbrrjdesgsmfddauxhcvmkmucvleinfaoakpdkisxynbeuprusselpebukcgpkuwyyxfgacqrqqatbwhfhiqrubbisvwpirdiaxxbtxmqpmnejwzzcgngopwbnasfqhqcvuamjosfodzvfgcxkwiqasozotqsshygmiuageihzqtonvrqwjbbcudruyiruwpmzomeblgsolfvmvbzxxyoglkncurpqeyzkwstuudwakgjtrrpnazdovtkmkkpuhbeekalordttledmtnxwjaqcoobvquhsyymcrdsbilzpjtcojgmsmofzhustytlsxslrifmetwmsiwsualaqchljwdqqeqsyhzvqsfatguoedntapbpxkdlarxvinabqusnspcycniproaebzqbluabijxpozzwxbvroiybuyxalkvpkxwbmlipgiitvehhnucdhgjfqwynsolcpzzbqgktlyvdekoxusnlzakxoliqqhtkggppxnrcxnkdcezguwaczdwcqncgfpcviaftfsrforshkuiqmbumculsqssvdiukgdlwpxdojoekjxocvnlhvqyqxmoluqfljxaaxtrdkjtdupwshvintnnmjobmaqcdqxcqfkvmuyluspwbgczqakfpvjgilkngpeyeaywdcqwhppgzyituixfwczszekpgivalrnvhuorsdejdqhaqlxhbrslmqcgmhgqiiwdtdstijulqkaihlufbixwovpjobpwiykufgywvpkuenduptajwycdgvfmyhooofnroyffxbrcjjlgphlzirjqkfxfqobucvcpgjqzsfsumnddecvzdafzgdyblwqylyvqmirtswbyifzkkemtonekvcznxsxjlyannmwzbvblovzheuinedqjpywijwinbjovcprfcgyzirkchllouomzyhviqkgslvoeilnsryzwqlocslvttdtkamdnjnfqxsxceoymnydhmesonbzyuufvkheaqbnowvvcmufmewpjbygwxmsrndujogikgjvzewwrqkwjzmritkufavulxpxkimlmjaawncbdmviuktqclnztzovigtxdiboytfxoczsoxiptlxtanvfdznqalssnuacvigktmvmijqnuqgmcdupefddszqtdmocerpfvwizkhmabigxfgyldwkocgblngqrctwelfofyzgdoxbiweiczgdftfxvuhzltjwwwmepraizkxnubfkmapdjmbskqhcklhflydyimkhhuokuczbzltburmkvktftbjxvdveqlnrwnhqmuuvurttxtapqtcssorfyqwyntwpzryoiqqfpairglndjyuadpuknlaampgharsszsfeltcjxolltpwlzfychyuvqqpgjbpgasvczzfgedkszcqfkniobebjmlzkbrrheodmirgvhilpaqbsxwuwpoflhozjblbulokombrvokshpttcsfujilsmnfmfmkijoehyishjfwuadvmvlszluhhsitcnmsnqactqxdcfkajrnhqznskrbjpeuajdhlmlfiujvqktynjjesdwbajjwnxyzsfqtgstxxttcntxzchqoncfaqtvpdvuezbaygpqmboyhivyqbreujrbhuqgkgpjlmmllkxszxzbahsmsgtteszxxwiavaashvsqcebxdrkfhdocofbkqpfrwzgadezmcyrsldgejguqjfnkxjesqealvvlctbksjqvfjexwfomeiiwjgaeuugbgmjwpxlitqcmtsgoyxigsdrzzvpqvyfnjncypjwtfnmkoifrglleupmayynsvztpwjqsazyvqnginlhlufbjfsmbgqooktdvciweuoulkrnvauudyzqamqjfvbekkmssyvuadtmotrfogechxzydfzwsluflroqavtuigvqhztnnsgfswgcnsvekfqfjrupqtqupidbhmhmybgnkyqajkeyigcrbubkefsikszxaphvwjonsxeqgaofxttxqjbjxouufgjxpjnfmhqvnoawsvlqbxhpqxqmtgcdbcsmuoaqbxeecwjoqpqyidgooieiblssymceelvamnitisgnoxinczlzcssfzxmslucqymdlahaaykkxxguvmxahmowehsvtoiufxuovywgmrahmxbnejznpzgsfzztuqxjmbhapeajaqdqejsotyfikjsqwzidutszvzloepisewwubnfegtwppjaampqtbinxburjcvpplbsozaicydjurjpxdurlfpnqzuorwrbokjhruqtpdretfbqimiyiiaremeureeulsxgzkgzfsaaqyvttblypsxwcshwesyvgaujgstlrhkqinpfqukiawcyywiensxlkylsnzpgbprlkrgfmsvndkpnyiujnkqdlkkomjmwkrqdzhpnjaohgzlobchdcatoptjcfueqjegbeyewkpysrsvlsnsomqhnxyerzqvmdmegdvfrnwnswhkgbfpqpullzdyiffbqfezjxnykzcvmsgqzaofyscvrhkhcxsbuwgabrxhkivyuygywrzwrixtgzlcsfrggtaifqbilvoouvexklflrezzgyzcfrawnbhiphudeqcajncqyfacqkcucbocogrchumtndokrvefatbbezjzckttrkfqphcfrovcmrvohdoirzgyxkbhhkhykmqsjjekscsxhdbbroppbmcqtqbtrfeygiweobjivwgfbvzktukqckoxgdxoflwgymnfbypeygaoffjvsnllzhviplwzpgaqljpcebszrmndrsgqyntoivjdaqhpcjjauuihiupjieksdvflydvwydznvgebzdoxkqhjebancktldpdbinvlocpyvractfzyrzbhndetzmcfbqbvfulrbuvnltivbnqaabvpcrfjzenlyfiwusiarvsvjqdfciotpyzmaqcpevmnkgyxdcwamgiuxqucpvxhwvatffbepwahhjjubfqbwptrywdrdvdpthuleycwrjhdemgdyyeizmiydbtsbdyxmopwrwfqkhaekoecsasodnnffrntskcfmzvczeqewwebmljcfipscexyynabqkucklvtcwqdhtelphuxtvzzmqqqxgomillxnipzytvqcwxqajozpgzmumlfhdoioqghstdnepotrshwbpcpzeqtdnmdhaxauqaimsqfjnltdqajuqfwnzhnfyjetgpxwatbefhsyupnhnzymplnwiuxulpwqljeywlgshaeyggmdpzhkuzrwwfrfhtghdwrghzcgijfscxebtbqyxtgbqfkiiwhsgwblhrgaicsizywgwhxsyqtmqtgcsxvnnrqmmxbokmncqqggmghrtdafksxaqpoxbvdnwuuoyjldcyzfhgeeryqzzkxnbvgmlghjhellfbmbcqsbdnbgtbewqqxxehddsdqzqsbeekxgxiwacqbxxfqyhqaxghrbpziasyyqjqozlumyuhhezbatcqrapgwxtemkneervnzmorjkukmptmfjgyklnuasarhrpofbhjpciznndyzfjyyqtdpwilvbnnqmemvxabrazhtejqfivtxohhmlzzarwczlysvwxffhsmjbahwzslwnmjgjbionhkyisjkpunpwdqujygvvvkxyfmuubokzmlouuvvbnfxaowizdgpqvtyuldmudcvllqoifvyzdmvxazdpgrrcdqqfuvdnqrjuqhqybrehzwytdehbpwbxvyxdlbasryzjrprgkjtrnvrbarfycdsmyozqvsfkepzlosbtnwalivfmbqypkgvpxqjjwmdytfkzlbhwgxbmtzhudeeodujgxlwaerqqjejlhvuxkgwkcclvztlopxrezjqltcvzbiflrezfmediycsmtr"
               data-component="body" hidden>
    <br>
<p>O campo value não pode ser superior a 255 caracteres. O campo value deve ter pelo menos 6 caracteres.</p>
        </p>
        </form>

                    <h2 id="endpoints-GETapi-v1-me">GET api/v1/me</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-me">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/me" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/me"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-me">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-me" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-me"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-me"></code></pre>
</span>
<span id="execution-error-GETapi-v1-me" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-me"></code></pre>
</span>
<form id="form-GETapi-v1-me" data-method="GET"
      data-path="api/v1/me"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-me', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-me"
                    onclick="tryItOut('GETapi-v1-me');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-me"
                    onclick="cancelTryOut('GETapi-v1-me');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-me" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/me</code></b>
        </p>
                    </form>

                    <h2 id="endpoints-POSTapi-v1-logout">POST api/v1/logout</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/logout" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/logout"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-logout">
</span>
<span id="execution-results-POSTapi-v1-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-logout"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-logout"></code></pre>
</span>
<form id="form-POSTapi-v1-logout" data-method="POST"
      data-path="api/v1/logout"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-logout"
                    onclick="tryItOut('POSTapi-v1-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-logout"
                    onclick="cancelTryOut('POSTapi-v1-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-logout" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/logout</code></b>
        </p>
                    </form>

                    <h2 id="endpoints-POSTapi-v1-refresh-token">POST api/v1/refresh-token</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-refresh-token">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/refresh-token" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/refresh-token"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-refresh-token">
</span>
<span id="execution-results-POSTapi-v1-refresh-token" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-refresh-token"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-refresh-token"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-refresh-token" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-refresh-token"></code></pre>
</span>
<form id="form-POSTapi-v1-refresh-token" data-method="POST"
      data-path="api/v1/refresh-token"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-refresh-token', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-refresh-token"
                    onclick="tryItOut('POSTapi-v1-refresh-token');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-refresh-token"
                    onclick="cancelTryOut('POSTapi-v1-refresh-token');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-refresh-token" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/refresh-token</code></b>
        </p>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
