<?php
	$root_path = "../";
  include_once('./common.php');

?>
 
<html>
    
<?php
	$root_path = "../";
  include_once('../header.php');
?>	
	<div class="container">

      		
	  <div id="content">
<div class="jumbotron" style="margin-bottom:0px;height:100%">
	  <div class="container" >
      <span id="title_fix"></span>  
    <p><h2 style="margin-bottom:30px;"> Deposit Your Datasets in <span style="color:#262626"><strong>DV<span style="color: #ea2f10;">-IMPACT</span></strong></span></h2></p>
		<br>
			    <p align="justify"><span style="color:#262626">The main purpose of DV-IMPACT is to serve as a central resource for large-scale disease variant impact assessment studies and to make these data available online in a uniform format that guarantees data integration and interoperability between different datasets. This page lists the requirements for datasets deposition to <span style="color:#262626"><strong>DV<span style="color: #ea2f10;">-IMPACT</span></strong></span>. The dataset should comply with the <span style="color:#262626"><strong>DV<span style="color: #ea2f10;">-IMPACT</span></strong></span> standard data  model (Table 1) and has the structure (or can be processed to be in the structure) that fits <span style="color:#262626"><strong>DV<span style="color: #ea2f10;">-IMPACT</span></strong></span> (Figure 1).</p>
		<br>



<table border="1px" style="font-size: 20px;">
<tr style="color:#ea2f10;font-size: 25px;">
  <td style="width:10%"> &nbsp;Data Items&nbsp; </td>
  <td style="width:15%"> &nbsp;Attributes&nbsp; </td>
  <td style="width:6%"> &nbsp;Type&nbsp; </td>
  <td > &nbsp;Description&nbsp; </td>
</tr>
 <tr>
     <td rowspan="9" >&nbsp;<strong>Mutations</strong></td>
     <td>Protein ID</td> 
     <td>Text</td> 
     <td>Standard protein identifier e.g. UniProt or Ensemble IDs (e.g. P04637 or ENSP00000269305).</td> 
</tr> 
<tr>
     <td>Mutation Type</td> 
     <td>Text</td> 
     <td>e.g. Substitution, Insertion, Deletion (as defined by mutation source database e.g. COSMIC).</td> 
</tr> 
<tr>
     <td>Mutation Description</td> 
     <td>Text</td> 
     <td>Should be in the standard form used by the major database and preceded by "p.". For instance, a substitution mutations will be "p.A1#A2", where A1 and A2 are the wildtype and the mutation amino acids, respectively, and # is the mutation position (e.g. p.P210R).</td> 
</tr>
<tr>
     <td>Disease Name</td> 
     <td>Text</td> 
     <td>As mentioned in the original paper can also be abbreviated (e.g. AML for Acute Myeloid Leukemia).</td> 
</tr>
<tr>
     <td>Mutation Source </td> 
     <td>Text</td> 
     <td>Database from where the mutations obtained (e.g. COSMIC, ICGC or TCGA).</td> 
</tr>
<tr>
     <td>[O] Mutation ID </td> 
     <td>Text</td> 
     <td>The mutation identifier in the mutation source for reference.</td> 
</tr>
<tr>
     <td>[O] Genomic Mutation Description </td> 
     <td>Text</td> 
     <td>Should be in the standard form used by the major database and preceded by "g." for genomic DNA. For instance, a substitution mutations in the DNA will be "g.N1#N2", where N1 and N2 are the wildtype and the mutation nucleotides, respectively, and # is the mutation position (e.g. g.A550C).</td> 
</tr>
<tr>
     <td>[O] Mutation Recurrence </td> 
     <td>Number</td> 
     <td>How many times that same mutation was observed in the sample cohort it was identified in.</td> 
</tr>
<tr>
     <td>[O] Mutation Samples </td> 
     <td>Number</td> 
     <td>Number of samples with the mutations to the total tested sample X/Y.</td> 
</tr>
<tr >
     <td rowspan="7" >&nbsp;<strong>Domains</strong></td>
     <td>Domain ID</td> 
     <td>Text</td> 
     <td>Unique identifier for each domain instance.</td> 
</tr> 
<tr>
     <td>Domain InterPro ID </td> 
     <td>Text</td> 
     <td>The domain type identifier from InterPro Database.</td> 
</tr> 
<tr>
     <td>Protein ID</td> 
     <td>Text</td> 
     <td>Standard protein identifier of the protein where this domain is found.</td> 
</tr>
<tr>
     <td>Domain Type</td> 
     <td>Text</td> 
     <td>The domain type as in from InterPro (e.g. SH2, SH3, WW, PDZ, Tyrosine-protein kinases).</td> 
</tr>
<tr>
     <td>Domain Name</td> 
     <td>Text</td> 
     <td>A human readable name to identify the domain (e.g. ProteinName_# where ProteinName is the name of the protein where this domain is found and # is the order of the domains, in case of multiple domain proteins).</td> 
</tr>
<tr>
     <td>Domain Coordinates*</td> 
     <td>Number</td>
     <td>The domain start and end positions in the protein.</td>  
</tr>
<tr>
     <td>[O] Other Proteins IDs</td> 
     <td>Text</td> 
     <td>Other proteins that have the same exact domain sequence.</td> 
</tr>
<tr >
     <td rowspan="5">&nbsp;<strong>Proteins</strong></td>
     <td>Protein ID</td> 
     <td>Text</td> 
     <td>Standard protein identifier e.g. UniProt or Ensemble IDs (e.g. P04637 or ENSP00000269305).</td> 
</tr> 
<tr>
     <td>Protein sequences</td> 
     <td>Text</td> 
     <td>The full protein sequence or the database and version information so that others can get the exact sequences was used in the predictions.</td> 
</tr> 
<tr>
     <td>[O] Protein Name</td> 
     <td>Text</td> 
     <td>Protein full name (e.g. Heat shock protein 90 for HSP90).</td> 
</tr>
<tr>
     <td>[O] Gene Symbol</td> 
     <td>Text</td> 
     <td>Standard gene symbol (e.g. HGNC gene symbol).</td> 
</tr>
<tr>
     <td>[O] Protein Description </td> 
     <td>Text</td> 
     <td>Additional information about the protein (e.g. other names, function or subcellular localization).</td> 
</tr>
<tr >
     <td rowspan="8">&nbsp;<strong>Interactions</strong></td>
     <td>Domain Protein ID</td> 
     <td>Text</td> 
     <td>The protein identifier of the protein of the domain as in the Domains data item.</td> 
</tr> 
<tr>
     <td>Peptide Protein ID</td> 
     <td>Text</td> 
     <td>The protein identifier of the protein of the peptide as in the Proteins data item.</td> 
</tr> 
<tr>
     <td>Domain ID</td> 
     <td>Text</td> 
     <td>The domain instance identifier as in the Domains data item.</td> 
</tr>
<tr>
     <td>Wildtype Score</td> 
     <td>Number</td> 
     <td>Score/evaluation of wildtype predicted interaction e.g. <i>p</i>-value.</td> 
</tr>
<tr>
     <td>Variant Score</td> 
     <td>Number</td> 
     <td>Score/evaluation of variant predicted interaction e.g. <i>p</i>-value.</td> 
</tr>
<tr>
     <td>Binding Start*</td> 
     <td>Number</td> 
     <td>Peptide's start position.**</td> 
</tr>
<tr>
     <td>Binding End*</td> 
     <td>Number</td> 
     <td>Peptide's end position.</td> 
</tr>
<tr>
     <td>[O] Supporting Information</td> 
     <td>Text</td> 
     <td>Any information used to support the predicted PPI or rewiring event e.g. gene/protein expression, subcellular localization, disorder, surface accessibility or sequence conservation.</td> 
</tr>
<tr >
     <td rowspan="4">&nbsp;<strong>[O]PWMs</strong></td>
     <td>PWM Name</td> 
     <td>Text</td> 
     <td>A name to identify the PWM e.g. DomainName_# where DomainName is the name of the domain which this PWM corresponds to and # is the order of the PWM, in case of multiple specificity domains.</td> 
</tr> 
<tr>
     <td>PWM File</td> 
     <td>Text</td> 
     <td>Contains peptide sequences used to generate the PWM (in FASTA format) or the PWMs data.</td> 
</tr> 
<tr>
     <td>Domain ID</td> 
     <td>Text</td> 
     <td>The domain instance identifier as in the Domains data item.</td> 
</tr>
<tr>
     <td>[O] Properties</td> 
     <td>Number</td> 
     <td>Any additional properties for the PWM e.g. score cut off or <i>p</i>-values.</td> 
</tr>

</table>

<p class=MsoNormal><span lang=EN-US style='font-size:10.0pt;"'>[O] Optional data item or attribute.<br> * Alternately, the peptide sequence can be provided.<br>** all sequence coordinates start from 1.</span></p>

<br>
<p>Table 1. The data items and their required and optional attributes according to <span style="color:#262626"><strong>DV<span style="color: #ea2f10;">-IMPACT</span></strong></span> data standard.</p>
<br>
	<img src="can-vd_data_standard.png" align="center"><br>
<p align="justify">Figure 1. Relationships between data items of <span style="color:#262626"><strong>DV<span style="color: #ea2f10;">-IMPACT</span></strong></span> standard data model for disease variants impact assessment. The relationships between the attributes correspond to the relationships between the tables in <span style="color:#262626"><strong>DV<span style="color: #ea2f10;">-IMPACT</span></strong></span>.</p>
 
<br>
<p>If you want to deposit your data into <span style="color:#262626"><strong>DV<span style="color: #ea2f10;">-IMPACT</span></strong></span>, please <a href="http://canvd.baderlab.org/contact/">write to us.</a> </p>
<br>
<?php
      include $root_path. 'footer.php';
    ?>
	  </body>
</html>
