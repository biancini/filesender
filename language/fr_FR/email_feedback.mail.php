subject: Retour {if:target_type=="recipient"}du destinataire{endif}{if:target_type=="guest"}de l'invité{endif} n°{target_id} {target.email}

{alternative:plain}

Madame, Monsieur,

Nous avons reçu un retour {if:target_type=="recipient"}du destinataire{endif}{if:target_type=="guest"}de l'invité{endif} n°{target_id} {target.email}, vous le trouverez attaché à ce message.

Cordialement,
{cfg:site_name}

{alternative:html}

<p>
    Madame, Monsieur,
</p>

<p>
    Nous avons reçu un retour {if:target_type=="recipient"}du destinataire{endif}{if:target_type=="guest"}de l'invité{endif} n°{target_id} {target.email}, vous le trouverez attaché à ce message.
</p>

<p>
    Cordialement,<br />
    {cfg:site_name}
</p>
