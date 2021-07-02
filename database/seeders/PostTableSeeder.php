<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder{

    public function run(){
        
        $post1 = new Post();
        $post1->naslov = "Šta je konceptualna e-trgovina? – Primer ShopiNS.rs";
        $post1->podnaslov = "Šta je poslovni model konceptualne e-trgovine?";
        $post1->tekst = "Veoma je mali broj e-prodavnica koje se izdvajaju u odnosu na konkurenciju svojom autentičnošću (odgovor na pitanje zašto kupovati baš u vašoj e-prodavnici). Jedan od najozbiljnijih načina sistemskog izdvajanja e-prodavnice u odnosu na konkurenciju je kreiranje poslovnog modela konceptualne e-trgovine.

        Napomena: Svi linkovi u tekstu se nalaze posebno izlistani na kraju teksta.
        Šta je poslovni model konceptualne e-trgovine?
        
        Jedna od definicija konceptualne e-trgovine jeste postavljanje marketinga u centar razmišljanja pri kreiranju svih segmenata e-trgovine (E-commerce Value Chain – Proučiti Guglov Playbook na temu marketinške perspektive kreiranja svih segmenata e-trgovine).
        
        Najkvalitetnije konceptualne e-trgovine u centru razmišljanja pri kreiranju onlajn prodavnice imaju – priču (storytelling – pričanje priča), koja je u tesnoj vezi sa željama i potrebama ciljne grupe kojoj se e-prodavnica obraća.
        
        Najuspešnije konceptualne e-trgovine imaju veoma dobro usaglašenu priču o e-trgovini (E-commerce Brand Storytelling) sa odabirom proizvoda prema potrebama kupaca, uključujući i kvalitetno kreiranu e-prodavnicu koja ima za cilj da korisnik lako i brzo završi kupovinu (E-commerce User Experience).
        Studija slučaja ShopiNS.rs – model konceptualne e-trgovine
        
        E-prodavnica ShopiNS.rs je pokrenuta u maju 2021. g. od strane Radija 021 sa ciljem “podrške radu Medijske kuće 021“.
        
        Jedinstvenost e-prodavnice: Prva rečenica opisa e-prodavnice glasi – Mi smo ShopiNS – onlajn prodavnica koja će na autentičan način pokušati da pruži odgovor na pitanje „Šta je novosadski?“.
        
        Jedinstveni vizuelni identitet e-prodavnice: Na prvoj stranici e-prodavnice (kao i u ilustraciji na početku ovog teksta) odmah se vidi autentičnost prikaza karakteristika svih vrsta proizvoda – jedinstvene ilustracije koje pružaju odgovor na pitanje „Šta je novosadski?“.
        
        Jedinstvenost odabira proizvoda: “Kroz likove simpatičnog i originalnog dizajna, veselih boja, uz upečatljive poruke i na kvalitetnim materijalima kupci su u prilici da saznaju koje su to omiljene aktivnosti Novosađana, koja su to mesta bila i ostala popularna za okupljanje, a posebna pažnja je posvećena i nekim simbolima duha stanovnika Srpske Atine.”
        
        opis-proizvoda---storytelling---shopins
        
        Jedinstvenost predstavljanja proizvoda: Tekstualni opis proizvoda spaja priču o prodavnici sa pričom o proizvodu. Priča o proizvodu “Biram da điram” je opisana u kontekstu interesovanja ciljne grupe ovakvog proizvoda – biciklisti. Dodatno, modeli na slikama proizvoda nisu “fotošopirane” stok fotografije, već su to slike novinara koji su uslikani sa realnim proizvodima.
        Koncept ShopiNS.rs je u direktnoj vezi sa potrebama i željama glavne ciljne grupe medija koji je vlasnik e-prodavnice
        
        Glavna ciljna grupa medija 021.rs su osobe koje prate vesti iz Novog Sada (osobe koje vole Novi Sad), a proizvodi u e-prodavnici odgovaraju na pitanje „Šta je novosadski?“.
        
        Jedan od načina povećanja prihoda medija jeste kreiranje e-prodavnica, jer za uspešnu prodaju u e-prodavnici veoma je važno obezbediti konstantnu visoku posećenost, što mediji omogućuju. Većina medija koji kreiraju sopstvene e-prodavnice, ili naprave strateške dogovore sa postojećim e-prodavnicama, ima za glavni cilj prodaju različitih proizvoda koji se lako i brzo prodaju. Veoma mali broj medija se odlučuje za kreiranje e-prodavnica u odnosu na potrebe određene ciljne grupe.
        
        U slučaju ShopiNS.rs dodatno je važno da je kreiranje e-prodavnice stavljeno u kontekst podrške profesionalnom novinarstvu. Poznato je da obezbeđivanje podrške nekom projektu ima mnogo veće efekte kada se takva podrška stavi u kontekst prodaje konkretnih proizvoda (crowdfunding način investiranja u onlajn projekte), u poređenju sa donacijama.
        
        e-commerce-kurs---misljenja
        Detaljnije informacije o E-commerce Intro kursu
        Kako se premošćava jaz između kvalitetne i uspešne e-trgovine?
        
        Kako je ShopiNS.rs mlada e-prodavnica sa malim brojem proizvoda, da bi ova konceptualna trgovina postala uspešna potrebno je da povećanje ponude proizvoda bude u direktnoj vezi sa konkretnim željama i potrebama kupaca. To se postiže kontinuiranim testiranjem prodajnih efekata različitih tipova i varijacija proizvoda, uz konstantnu komunikaciju sa kupcima.
        
        Linkovi u tekstu:
        
            Zašto kupovati baš u vašoj e-prodavnici
            Google Playbook na temu marketinške perspektive kreiranja svih segmenata e-trgovine
            Storytelling – pričanje priča
            E-commerce Brand Storytelling
            E-commerce User Experience
            Stok fotografija
            Crowdfunding način investiranja
        
        Napomena: Povod za ovaj tekst je činjenica da kada sam prvi put došao do opisane e-prodavnice bio sam veoma pozitivno iznenađen nivoom detalja koji čine kvalitetnu konceptualnu e-prodavnicu, a takvih primera ima veoma malo kod nas.";
        $post1->autor = "Srđan Marković";
        $post1->save();

        $post2 = new Post();
        $post2->naslov = "Osnove: Kako zarađivati od interneta?";
        $post2->podnaslov = "Osnovni modeli zarade putem interneta";
        $post2->tekst = "Tokom svih ovih godina veoma često mi se dešava da me ljudi pitaju kako da oni nešto zarade od interneta. To često izgleda ovako:

        – “Nemam nikakva posebna znanja iz neke oblasti, ali bih hteo nešto da naučim što će mi doneti novac, a možda i stalno zaposlenje.”
        
        U prethodnoj rečenici krije se i tajna mogućnosti zarade od interneta, a to je da razvijete znanje iz određene oblasti koja može da vam donese zaradu. Preporuka je da to bude neka od oblasti koja vas interesuje, jer ćete tada lakše i brže naučiti najvažnije aspekte nekog posla.
        
            Ovaj tekst nije na temu kako lako zarađivati na internetu (po mogućnosti bez nekog rada), jer se za sve te “obećane zemlje” na kraju ispostavi ili da su prevara, ili da je potrebno puno rada i znanja da se do obećanih lakih para dođe.Takođe, tekst se bavi etičkim načinima zarade.
        
        Osnovni modeli zarade putem interneta
        
        Kada ste upoznati sa tim šta vas u životu interesuje, i u kojoj biste oblasti da se usavršvate, internet je idealno sredstvo za edukaciju. Kada ne znate šta vas konkretno interesuje, potrebno je prvo da imate svest o tome koji sve načini sticanja dobiti i poslova postoje na vebu, ili u vezi sa vebom, pa tek onda da krenete sa specijalizacijom iz odabranih oblasti. U ovom tekstu je fokus o načinima sticanja koristi od interneta, a posebni tekstovi o načinima edukacije već postoje na mom blogu, a biče ih još.
        
        Veoma je važno napomenuti da je za većinu načina zarade putem interneta poznavanje engleskog jezika ili nekih drugih svetskih jezika preduslov da bi se došlo brzo do kvalitetnih znanja. Što je bolje poznavanje stranih jezika, veće su i šanse da se brže dođe do velikog broja različitih poslova u svetu koji nisu dostupni na lokalnim jezicima, jer je privreda mnogo slabije razvijena.
        
        Da bi se došlo do iskustava koja su potrebna za večinu poslova koji se mogu raditi online najbolje je raditi nešto konkretno za sebe, prijatelje ili rodbinu (još bolje je da nađete odmah komercijalni posao koji ćete manje naplatiti jer učite) iz oblasti koju ste odabrali, ili da se pridružite volontiranju (opensource) na nekim velikim internacionalnim projektima gde dobijate i iskustvo i reference.
        
        U nastavku sledi kratak opis najočiglednijih i najjednostavnijih načina ostvarivanja zarade od interneta:
        
        Prodaja
        
            Zarada putem prodaje polovnih ili novih stvari na sajtovima kao što su eBay (intenacionalno) ili Limundo (lokalno) 
            Najjednostavniji način zarade jeste korišćenje velikog broja osoba na jednom mestu koji kupuju i prodaju sve i svašta (online buvljaciji, kvantaši…). Znam veliki broj osoba koji na najvećoj online prodavnici u Srbiji Limundo.com prodaju svoje polovne stvari i na taj način dopunjuju svoj kućni budžet. Što se tiče lokacije eBay.com, za sada je i dalje potrebno da imate neki PayPal nalog iz inostranstva da biste mogli da naplatite prodato preko ovog internacionalnog servisa, ali će se i to verovatno promeniti tokom sledeće godine kada PayPal uvede mogućnost naplate u Srbiji.
            Iznajmjivanje vašeg smeštaja ili dela smeštaja preko sajtova kao što je AirBnb
            Putem ovog tipa servisa moguće je iznajmiti jednu sobu uvašoj kući ili stanu ili ceo stan/kuću kao pojedinac bilo kome iz celog sveta. Zgodno za dopunjavanje kućnog budžeta.
            Možete postati vodič za turiste u vašem mestu preko sajta Vayable.com.
            Prodaja je generalno najcenjeniji biznis svuda, pa i na internetu
            Ovaj savet veoma često dajem, ali se najmanje koristi jer većina osoba nije spremna da se otisne u vode prodaje gde uvek ima posla. Na internetu umeće prodaje može da se nauči i usavrši na više različitih načina, od vođenja online prodaje za pojedinačne firme koje prodaju proizvode i usluge online, do varijante prodaje online oglasa/banera na velikom broju sajtova koji imaju mogućnost zarade od advertajzinga. Za online prodaju proizvoda važna su znanja iz oblasti internet marketinga (objašnjeno kasnije u tekstu), dok je za prodaju online oglašavanja dovoljno poznavanje toga što se prodaje i spremnost da posle 20 ili 100 neprodatih oglasa, prodate jedan ili njih nekoliko.
            www.100lice.com je primer online prodavnice kreirane od strane pojedinca koji je napravio dil sa distributerom stolica i opreme za stolice da otvori online prodaju njihovih proizvoda. Kao što se kreira prodavnica bilo koje robe u klasičnom poslovanju, tako se može napraviti i online prodavnica.
            Obezbeđivanje sredstava za vaš projekat preko CrowdFunding platformi kao što su Kickstarter ili Indiegogo
            Ako imate vaš projekat za koji su vam potrebna sredstva, preko pomenutih platformi je moguće doći do sredstava za izvođenje projekta, gde je cilj da prodate vašu priču o projektu koju će “kupiti” osobe koje su raspoložene da pomognu kreiranje novih projekata. Platformu Indiegogo je lakše koristiti iz Srbije. Važno je ozbiljno proučiti kako su neki drugi srodni projekti došli do sredstava, pa uočeno primeniti.
        
        Freelance poslovi i platforme
        
        Za sve tipove poslova koji se mogu manje ili više lako pronači na internetu potrebno je prethodno znanje i iskustvo.
        
            Najbolji pregled poslova i potrebnih veština za pojedinačne poslove preko interneta mogu se pronaći na poznatim Freelance platformama eLance i oDesk. Veliki broj osoba iz ovih krajeva zarađuje za život nalazeći poslove preko ovakvih i sličnih platformi za povremene ili stalne poslove. Ima veliki broj specijalizovanih sajtova za pronalaženje poslova, naročito za programere i dizajnere.
        
        Online marketing i PR
        
            Oblast internet marketinga u poslednjih desetak godina se toliko proširila i postala složena da je praktično nemoguće biti veoma kvalitetan u svim oblastima kao pojedinac. Za svaki od segmenata ove oblasti potrebna su specifična znanja koja se uče preko veba (literature ima puno online), a vežbaju se putem promocije sopstvenih sajtova i blogova. Ipak, postoji nekoliko oblasti koje su veoma važne svim online privrednicima a odnose se na tehnike povećanja posećenosti sajta:
            Optimizacija za pretraživače je osnovna oblast online marketinga i o ona se može učiti na puno mesta online, ali bi trebalo krenuti od saveta koji daje sam Gugl.
            Vođenje naloga na društvenim mrežama je veoma važan aspekt online promocije koji ako se radi kako treba može da donese značajne efekte i u području prodaje.
            Oglašavanje na Guglu i društvenim mrežama (PPC advertajzing) kao i ostali tipovi kreiranja online reklamnih kampanja predstavljaju osnovu online promocije poslednjih godina. Za kreiranje ozbiljnog posla na internetu već godinama nije dovoljno samo angažovanje koje ne traži direktno pare (već vreme), već je neophodno uložiti i sredstva u ciljanu promociju.
            Tek nakon savlađivanja osnovnih oblasti online promocije koje omogućuju znanje o tome kako dovesti posetioce na veb sajt moguće je zarađivati od oglašavanja, ali to nije nimalo jednostavno.
            Još više znanja je potrebno da bi se zarađivalo od tzv. partnerskih programa (Affiliate marketing) koji u osnovi imaju mogućnost da se zaradi provizija od predstavljanja određenih proizvoda i usluga.
        
        Online sadržaji
        
        Za sve ostale načine zarade potrebna su prethodno pomenuta znanja iz oblasti online promocije, u manjoj ili većoj meri.
        
            Prodaja fotografija online
            O prodaji preko tzv. Stock Photo sajtova se kao dosta zna, ali je najvažniji detalj u ovoj oblasti veoma dobro poznavanje obrade fotografija u programima kao što je Photoshop, kao i ozbiljno istraživanje šta se uopšte od fotografija kupuje online.
            Kreiranje video materijala koji donose zaradu
            U poslednje vreme sve se više priča o zaradi koja se može ostvariti ako imate YouTube kanal koji mesečno pregleda veliki broj osoba. To je u osnovi Googlov servis AdSense čija je karakteristika da broj pregleda treba biti u milionima mesečno (po mogućnosti u desetinama miliona pregleda) da bi se od ovog sistema zarađivalo ozbiljnije.
            Pisanje tekstova i kreiranje e-knjiga
            Za sada ova oblast je mnogo isplativija na popularnim govornim područjima, i što kvalitetnije pišete imate više različitih načina da dođete do sredstava. Od pisanja za različite veb sajtove, preko kreiranja prodajnih tekstova do varijante prodaje sopstvenih e-knjiga preko Amazona sve su dobri načini kako se može zaraditi od kreiranja tekstova. U našim uslovima ova oblast će se posebno dobro razvijati u narednim godinama.
        
        Programiranje, dizajn (tehnološka zanimanja)
        
        Najveći broj osoba online nalazi poslove u oblastima koja su u vezi sa tehnološkim znanjima i koja imaju veze sa programiranjem i dizajnom. Ova znanja i veštine nikako nisu u domenu osnovnih znanja za zaradu na internetu (kao što to nije većina ispisanih predloga načina online zarade) i potrebno je vreme da bi se došlo do adekvatnih znanja i veština koje se mogu naplaćivati.
        
        Veoma je važno napomenuti da poslovi programera i dizajnera nisu jedini poslovi  (via @kremasica) koji su u vezi  sa oblastima tehnologije generalno, ali i same internet tehnologije. Tu sada postoje specijalizovane oblasti koje su u vezi sa kreiranjem online/mobile igrica, kreiranje korisničkog doživljaja (UI/IA, UX), upravljanjem projektima iz oblasti IT, itd. o kojima mladi ljudi ni ne razmišljaju, a u tim oblastima postoji puno velikih i lepih šansi za posao.
        
        U svim ovim oblastima veoma je važno proučiti tačno koje se veštine traže za koju poslovnu poziciju, jer npr. biti programer znači danas poznavati puno različitih oblasti koje na prvi pogled nisu  vezi sa samim poznavanjem programskih jezika.
        Naravoučenije
        
        Ima puno različitih mogućnosti zarade korišćenjem interneta, ali to nije problem. Problem je neodlučnost osoba koje uopšte pitaju – “a šta sada da ja učim”. Morate saznati šta vas interesuje i šta biste želeli da radite, da biste to što pre počeli da savlađujete…
        
            U zavisnosti od reakcija na ovaj tekst, nastavio bih sa serijalom tekstova na ovu temu gde bih detaljnije objasnio šta je potrebno u određenim oblastima da bi se došlo do posla i do zarade…";
            $post2->autor = "Srđan Marković";
            $post2->save();
    }
}
