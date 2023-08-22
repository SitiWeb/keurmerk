
<form method="POST" class="mt-4" action="{{ route('websites.checklist', ['websites' => $website->id]) }}">
    @csrf
    <!-- First section: algemene voorwaarden -->
    <h3>Algemene voorwaarden</h3>
    
    <div class="form-group">
       
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="published" name="published" 
   
            @if(isset($checklist['published']) && $checklist['published'])
            	checked
            @endisset  
            > 
            <label class="form-check-label" for="published">De algemene voorwaarden zijn gepubliceerd</label>
        </div>

        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="identity" name="identity"
            @if(isset($checklist['identity']) && $checklist['identity'])
            	checked
            @endisset  
            >
            <label class="form-check-label" for="identity">Identiteit van de ondernemer aanwezig</label>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="companyInfo" name="companyInfo"
            @if(isset($checklist['companyInfo']) && $checklist['companyInfo'])
            	checked
            @endisset  
            >
            <label class="form-check-label" for="companyInfo">Bedrijfsgegevens</label>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="complaints" name="complaints"
            @if(isset($checklist['complaints']) && $checklist['complaints'])
            	checked
            @endisset  
            >
            <label class="form-check-label" for="complaints">Klachtenafhandeling</label>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="odr" name="odr"
            @if(isset($checklist['odr']) && $checklist['odr'])
            	checked
            @endisset  
            >
            <label class="form-check-label" for="odr">Verwijzing ODR</label>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="rightToWithdraw" name="rightToWithdraw"
            @if(isset($checklist['rightToWithdraw']) && $checklist['rightToWithdraw'])
            	checked
            @endisset  
            >
            <label class="form-check-label" for="rightToWithdraw">Herroepingsrecht</label>
        </div>
    </div>

    <!-- Next section: Privacy beleid -->
    <h3>Privacy beleid</h3>
    <div class="form-group">
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="privacyPolicy" name="privacyPolicy"
            @if(isset($checklist['privacyPolicy']) && $checklist['privacyPolicy'])
            	checked
            @endisset  
            >
            <label class="form-check-label" for="privacyPolicy">Privacybeleid aanwezig</label>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="cookiePolicy" name="cookiePolicy"
            @if(isset($checklist['cookiePolicy']) && $checklist['cookiePolicy'])
            	checked
            @endisset  
            >
            <label class="form-check-label" for="cookiePolicy">Cookiebeleid</label>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="dataRights" name="dataRights"
            @if(isset($checklist['dataRights']) && $checklist['dataRights'])
            	checked
            @endisset  
            >
            <label class="form-check-label" for="dataRights">Rechten aangaande privégegevens</label>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="privacyHandling" name="privacyHandling"
            @if(isset($checklist['privacyHandling']) && $checklist['privacyHandling'])
            	checked
            @endisset  
            >
            <label class="form-check-label" for="privacyHandling">Omgang privacygegevens eigen handelen en derden</label>
        </div>
    </div>

    <!-- Next section: Contactgegevens -->
    <h3>Contactgegevens</h3>
    <div class="form-group">
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="logicalContactInfo" name="logicalContactInfo"
            @if(isset($checklist['logicalContactInfo']) && $checklist['logicalContactInfo'])
            	checked
            @endisset  
            >
            <label class="form-check-label" for="logicalContactInfo">Contactgegevens logisch te vinden</label>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="telefoonnummer" name="telefoonnummer"
            @if(isset($checklist['logicalContactInfo']) && $checklist['logicalContactInfo'])
            	checked
            @endisset  
            >
            <label class="form-check-label" for="telefoonnummer">Telefoonnummer</label>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="adres" name="adres"
            @if(isset($checklist['adres']) && $checklist['adres'])
            	checked
            @endisset  
            >
            <label class="form-check-label" for="adres">Adres</label>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="emailadres" name="emailadres"
            @if(isset($checklist['emailadres']) && $checklist['emailadres'])
            	checked
            @endisset  
            >
            <label class="form-check-label" for="emailadres">Emailadres</label>
        </div>
    </div>

    <!-- Next section: KVK & BTW -->
    <h3>KVK & BTW</h3>
    <div class="form-group">
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="logicalKVK" name="logicalKVK"
            @if(isset($checklist['logicalKVK']) && $checklist['logicalKVK'])
            	checked
            @endisset  
            >
            <label class="form-check-label" for="logicalKVK">KVK logisch te vinden</label>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="logicalBTW" name="logicalBTW"
            @if(isset($checklist['logicalBTW']) && $checklist['logicalBTW'])
            	checked
            @endisset  
            >
            <label class="form-check-label" for="logicalBTW">BTW nummer logisch te vinden</label>
        </div>
    </div>

    <!-- Next section: Herroepingsrecht -->
    <h3>Herroepingsrecht</h3>
    <div class="form-group">
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="retourrechtsgeldig" name="retourrechtsgeldig"
            @if(isset($checklist['retourrechtsgeldig']) && $checklist['retourrechtsgeldig'])
            	checked
            @endisset  
            >
            <label class="form-check-label" for="retourrechtsgeldig">Rechtsgeldigheid</label>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="retourprocedure" name="retourprocedure"
            @if(isset($checklist['retourprocedure']) && $checklist['retourprocedure'])
            	checked
            @endisset  
            >
            <label class="form-check-label" for="retourprocedure">Retourprocedure toegelicht</label>
        </div>
    </div>

    <!-- Next section: Klachtenregeling -->
    <h3>Klachtenregeling</h3>
    <div class="form-group">
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="klachtrechtsgeldig" name="klachtrechtsgeldig"
            @if(isset($checklist['klachtrechtsgeldig']) && $checklist['klachtrechtsgeldig'])
            	checked
            @endisset  
            >
            <label class="form-check-label" for="klachtrechtsgeldig">Rechtsgeldigheid klachtenregeling</label>
        </div>
        <!-- <div class="form-check">
            <input type="checkbox" class="form-check-input" id="odr" name="odr">
            <label class="form-check-label" for="odr">Vermelding ODR</label>
        </div> -->
    </div>

    <!-- Next section: Prijzen en extra opties -->
    <h3>Prijzen en extra opties</h3>
    <div class="form-group">
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="inbtw" name="inbtw"
            @if(isset($checklist['inbtw']) && $checklist['inbtw'])
            	checked
            @endisset  
            >
            <label class="form-check-label" for="inbtw">Prijzen kunnen worden weergegeven als inc. BTW</label>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="optional_fields" name="optional_fields"
            @if(isset($checklist['optional_fields']) && $checklist['optional_fields'])
            	checked
            @endisset  
            >
            <label class="form-check-label" for="optional_fields">Optionele extra kosten velden staan niet standaard aangevinkt.</label>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="newsletter_option" name="newsletter_option"
            @if(isset($checklist['newsletter_option']) && $checklist['newsletter_option'])
            	checked
            @endisset  
            >
            <label class="form-check-label" for="newsletter_option">Inschrijven voor nieuwsbrieven staat niet standaard aangevinkt.</label>
        </div>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>

