<?php

$diretores = ['nome1','nome2 silva','nome3'];
$diretores_str = '';
$diretores_tag = '';
if ($diretores !== FALSE){
	$diretores_str = implode(",",$diretores);
	foreach ($diretores as $diretor){
		$tmp = explode(" ",$diretor);
		$tmp2 = (Count($tmp) > 1 ? $tmp[Count($tmp)-1]."," : $tmp[0]); // Sobrenome
		for ($i=0;$i<Count($tmp)-1;$i++){
			$tmp2 .= " ".$tmp[$i];
		}
		$diretores_tag .= "<md:People><md:Job>
		<md:JobFunction>Diretor</md:JobFunction>
		<md:BillingBlockOrder>".$billingBlockOrder."</md:BillingBlockOrder>
		</md:Job><md:Name>
		<md:DisplayName language=\"en-US\">".substr($tmp2,0,35)."</md:DisplayName>
		</md:Name>
		</md:People>\n\t";
	}
}


$xml = "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<mdmec:CoreMetadata xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xmlns:md=\"http://www.movielabs.com/schema/md/v2.6/md\" xmlns:mdmec=\"http://www.movielabs.com/schema/mdmec/v2.6\" xsi:schemaLocation=\"http://www.movielabs.com/schema/mdmec/v2.6/mdmec-v2.6.xsd\">
<mdmec:Basic ContentID=\"md:cid:org:amazonstudios:1-34-876555-60-3909\">
<md:LocalizedInfo language=\"en-US\">
<md:TitleDisplayUnlimited></md:TitleDisplayUnlimited>
<md:TitleSort/>
<md:ArtReference resolution=\"1920x2560\" purpose=\"boxart\">Enter_the_localized-EN_3x4_boxart_file_name_here</md:ArtReference>
<md:ArtReference resolution=\"3840x2160\" purpose=\"cover\">Enter_the_localized-EN_16x9_cover_file_name_here</md:ArtReference>
<md:ArtReference resolution=\"3840x2160\" purpose=\"hero\">Enter_the_16x9_hero_file_name_here</md:ArtReference>
<md:Summary190></md:Summary190>
<md:Summary400></md:Summary400>
<md:Genre id=\"av_genre_action\"></md:Genre>
</md:LocalizedInfo>
<md:ReleaseYear></md:ReleaseYear>
<md:ReleaseDate></md:ReleaseDate>
<md:WorkType></md:WorkType>
<md:AltIdentifier>
<md:Namespace></md:Namespace>
<md:Identifier></md:Identifier>
</md:AltIdentifier>
<md:RatingSet>
<md:Rating>
<md:Region>
<md:country></md:country>
</md:Region>
<md:System>MPAA</md:System>
<md:Value></md:Value>
</md:Rating>
</md:RatingSet>
".$diretores_tag."
<md:OriginalLanguage></md:OriginalLanguage>
<md:AssociatedOrg organizationID= role=\"licensor\"/>
</mdmec:Basic>
<mdmec:CompanyDisplayCredit>
<md:DisplayString language=\"en-US\"></md:DisplayString>
</mdmec:CompanyDisplayCredit>
</mdmec:CoreMetadata>
";

print $xml;