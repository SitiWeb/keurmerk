<table class="table table-bordered mt-4">
    <thead>
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <td>De algemene voorwaarden zijn gepubliceerd</td>
            <td>{{ $checklist->published ? 'Yes' : 'No' }}</td>
        </tr>
        <tr>
            <td>Identiteit van de ondernemer aanwezig</td>
            <td>{{ $checklist->identity ? 'Yes' : 'No' }}</td>
        </tr>
        <tr>
            <td>Bedrijfsgegevens</td>
            <td>{{ $checklist->companyInfo ? 'Yes' : 'No' }}</td>
        </tr>
        <tr>
            <td>Klachtenafhandeling</td>
            <td>{{ $checklist->complaints ? 'Yes' : 'No' }}</td>
        </tr>
        <tr>
            <td>Verwijzing ODR</td>
            <td>{{ $checklist->odr ? 'Yes' : 'No' }}</td>
        </tr>
        <tr>
            <td>Herroepingsrecht</td>
            <td>{{ $checklist->rightToWithdraw ? 'Yes' : 'No' }}</td>
        </tr>
        <tr>
            <td>privacyPolicy</td>
            <td>{{ $checklist->privacyPolicy ? 'Yes' : 'No' }}</td>
        </tr>
        <tr>
            <td>cookiePolicy</td>
            <td>{{ $checklist->cookiePolicy ? 'Yes' : 'No' }}</td>
        </tr>
        <tr>
            <td>dataRights</td>
            <td>{{ $checklist->dataRights ? 'Yes' : 'No' }}</td>
        </tr>
        <tr>
            <td>privacyHandling</td>
            <td>{{ $checklist->privacyHandling ? 'Yes' : 'No' }}</td>
        </tr>
        <tr>
            <td>logicalContactInfo</td>
            <td>{{ $checklist->logicalContactInfo ? 'Yes' : 'No' }}</td>
        </tr>
        <tr>
            <td>telefoonnummer</td>
            <td>{{ $checklist->telefoonnummer ? 'Yes' : 'No' }}</td>
        </tr>
        <tr>
            <td>adres</td>
            <td>{{ $checklist->adres ? 'Yes' : 'No' }}</td>
        </tr>
        <tr>
            <td>emailadres</td>
            <td>{{ $checklist->emailadres ? 'Yes' : 'No' }}</td>
        </tr>
        <tr>
            <td>logicalKVK</td>
            <td>{{ $checklist->logicalKVK ? 'Yes' : 'No' }}</td>
        </tr>
        <tr>
            <td>logicalBTW</td>
            <td>{{ $checklist->logicalBTW ? 'Yes' : 'No' }}</td>
        </tr>
        <tr>
            <td>retourrechtsgeldig</td>
            <td>{{ $checklist->retourrechtsgeldig ? 'Yes' : 'No' }}</td>
        </tr>
        <tr>
            <td>retourprocedure</td>
            <td>{{ $checklist->retourprocedure ? 'Yes' : 'No' }}</td>
        </tr>
        <tr>
            <td>klachtrechtsgeldig</td>
            <td>{{ $checklist->klachtrechtsgeldig ? 'Yes' : 'No' }}</td>
        </tr>
        <tr>
            <td>inbtw</td>
            <td>{{ $checklist->inbtw ? 'Yes' : 'No' }}</td>
        </tr>
        <tr>
            <td>optional_fields</td>
            <td>{{ $checklist->optional_fields ? 'Yes' : 'No' }}</td>
        </tr>
        <tr>
            <td>newsletter_option</td>
            <td>{{ $checklist->newsletter_option ? 'Yes' : 'No' }}</td>
        </tr>


        <!-- Add more rows for other checklist fields -->
        <tr>
            <td>First check</td>
            <td>{{ $checklist->created_at }}</td>
        </tr>
        <tr>
            <td>Last Updated At</td>
            <td>{{ $checklist->updated_at }}</td>
        </tr>
    </tbody>
</table>
<a href="{{ route('websites.checking', $website->id) }}">Check</a>