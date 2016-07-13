

<?php
  $root_path = "../";
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
    <p><h2 style="margin-bottom:30px;"><span style="color:#262626"><strong>DV<span style="color: #ea2f10;">-IMPACT</span></strong></span> Frequently Asked Questions</h2></p>
		<br>
			    <p align="justify"><span style="color:#262626"><strong>DV<span style="color: #ea2f10;">-IMPACT</span></strong></span> is an online resource for the disease variants impact assessment on domain-peptide PPI networks. <span style="color:#262626"><strong>DV<span style="color: #ea2f10;">-IMPACT</span></strong></span> stores the PPI interaction networks mediated by wildtype and disease variants and visualizes the overlay of the two networks to understand the effects of mutations on the network and consequently their cellular and biological impact. Currently, the impact of ~250,000 disease (cancer) missense mutations stored in <span style="color:#262626"><strong>DV<span style="color: #ea2f10;">-IMPACT</span></strong></span>. Furthermore, <span style="color:#262626"><strong>DV<span style="color: #ea2f10;">-IMPACT</span></strong></span> provides the full sequences of the wildtype and disease variant proteins with a comprehensive search and download interface to easily build customized protein databases for genomic and proteomic analysis. </p>
		<br>
		
     <p><strong>Q1- What is <span style="color:#262626"><strong>DV<span style="color: #ea2f10;">-IMPACT</span></strong></span>?</strong></p>
    <p align="justify">- The Disease Variants Impact on Domain-based Protein Interactions (<span style="color:#262626"><strong>DV<span style="color: #ea2f10;">-IMPACT</span></strong></span>) database an online resource for disease variants and their impacts on domain-peptide protein interaction networks.</p><br>

    <p><strong>Q2- What type of predictions are available in <span style="color:#262626"><strong>DV<span style="color: #ea2f10;">-IMPACT</span></strong></span>?</strong></p>
    <p align="justify">- <span style="color:#262626"><strong>DV<span style="color: #ea2f10;">-IMPACT</span></strong></span> is designed to store the predictions of disease variants impact on domain-based PPIs as well as kinase-substrate interactions. Currently, <span style="color:#262626"><strong>DV<span style="color: #ea2f10;">-IMPACT</span></strong></span> stores the dataset of all published studie that provide disease variants impact assessment on PPI. All available datasets are listed at the Datasets page.</p><br>
    
    <p><strong>Q3- What are the types of information stored in <span style="color:#262626"><strong>DV<span style="color: #ea2f10;">-IMPACT</span></strong></span>?</strong></p>
    <p align="justify">- <span style="color:#262626"><strong>DV<span style="color: #ea2f10;">-IMPACT</span></strong></span> stores the following information:
1- PPI predictions
2- Variants impacts on the predicted PPIs.
3- Evaluation of the predictions using 9 different genomic and context features.
4- Network information in JSON and tab-delimited formats.
5- Binding motifs (PWMs) in three different formats and the sequence logos. 
6- Protein sequences for wildtype and disease variants.
        7- Mutation information including source, tissue and frequency.</p>
    
    <p><strong>Q4- What are the use cases of <span style="color:#262626"><strong>DV<span style="color: #ea2f10;">-IMPACT</span></strong></span>?</strong></p>
    <p align="justify">1- Search and download disease variants impact data.
        2- Search and download disease variants sequences and information.
        3- Download PWMs of the interactions domains.
        4- Deposit your disease variants impact dataset.</p>
 
    <p><strong>Q5- How to obtain all variants of particular protein?</strong></p>
    <p align="justify">- To obtain the disease variants of particular protein, go to Variants search and enter the protein name on the Protein name/ID text box and click search. <span style="color:#262626"><strong>DV<span style="color: #ea2f10;">-IMPACT</span></strong></span> accepts gene symbol, Ensembl or UniProt IDs only. In the search result, click the name of your protein of interest (if the search result has more than one protein), to go to the details page. The details page list all the variants of this protein available in <span style="color:#262626"><strong>DV<span style="color: #ea2f10;">-IMPACT</span></strong></span>. Use the download links to download the sequence(s) of particular variants or the download button on the top of the results section to download all of them in a single fasta file.</p>

    <p><strong>Q6- How to obtain all variants of particular disease type or tissue?</strong></p>
    <p align="justify">- To obtain the disease variants of particular disease type or tissue, go to Variants search and select one or more disease type(s) or tissue(s) and click search. In the search result, click the download button to download the information of the protein displayed in the current view or click the name of your protein of interest (if the search result has more than one protein), to go to the details page. The details page list all the variants of this protein available in <span style="color:#262626"><strong>DV<span style="color: #ea2f10;">-IMPACT</span></strong></span>. Use the download links to download the sequence(s) of particular variants or the download button on the top of the results section to download all of them in a single fasta file.</p>

    <p><strong>Q7- How can <span style="color:#262626"><strong>DV<span style="color: #ea2f10;">-IMPACT</span></strong></span> help in disease proteomics?</strong></p>
    <p align="justify">- <span style="color:#262626"><strong>DV<span style="color: #ea2f10;">-IMPACT</span></strong></span> provides the full sequence of the wildtype proteins and their corresponding mutants with information of the mutation position, reference amino acid and mutant amino acid. It provides variants all in a fasta file ready to be used directly as a database for protein identification in any standard mass spectrometry-based proteomics data analysis workflow, for instance. Therefore, it opens horizons of identifying mutant proteins in the disease samples. To obtain all variants of particular protein, disease or tissue, see Q5 and Q6.</p>
    
    <p><strong>Q8- Can I use <span style="color:#262626"><strong>DV<span style="color: #ea2f10;">-IMPACT</span></strong></span> data with Cytoscape?</strong></p>
    <p align="justify">- <span style="color:#262626"><strong>DV<span style="color: #ea2f10;">-IMPACT</span></strong></span> network visualization was developed using Cytoscape.JS. The interaction network is available in two different formats as JSON documents and in tab-delimited format. Both can be downloaded from the download tab in left panel of the network page.</p>

    </div>
	<div class="container">
	
  <?php
      include $root_path. 'footer.php';
    ?>

	</div>

	</div>

	<script>
	$(loadCy = function(){

  options = {
  	name: 'circle',
    showOverlay: true,
    minZoom: 0.5,
    maxZoom: 2,
    fit:true,

    style: cytoscape.stylesheet()
      .selector('node')
        .css({
          'background-color': '#c4c4c4',
          'content': 'data(name)',
          'font-family': 'helvetica',
          'font-size': 14,
          'text-valign': 'center',
          'color': '#0b1a1e',
          'width': 'mapData(weight, 30, 80, 20, 50)',
          'height': 'mapData(height, 0, 200, 10, 45)',
          'border-color': '#fff'
        })
      .selector(':selected')
        .css({
          'background-color': '#f04124',
          'line-color': '#000',
          'target-arrow-color': '#000',
          'text-outline-color': '#000'
        })
      .selector('edge')
        .css({
          'width': 2,
          'line-color': 'data(func)',
          'line-style': 'data(type)',
          'target-arrow-shape': 'triangle'
        })
    ,

    elements: {
      nodes: [
        {
          data: { id: 'j', name: 'ProtJ', weight: 65, height: 150 }
        },

        {
          data: { id: 'e', name: 'ProtE', weight: 65, height: 150 }
        },

        {
          data: { id: 'k', name: 'ProtK', weight: 65, height: 150 }
        },

        {
          data: { id: 'g', name: 'ProtG', weight: 65, height: 150 }
        }
      ],

      edges: [
        { data: { source: 'j', target: 'e', type: 'dashed', func:'#388f58' } },
        { data: { source: 'j', target: 'k', type: 'dashed', func:'#388f58' } },
        { data: { source: 'j', target: 'g', func:'#388f58', func: '#dc2c0f' }  },

        { data: { source: 'e', target: 'j', func:'#39b3d7' }  },
        { data: { source: 'e', target: 'k', type: 'dashed', func:'#388f58' } },

        { data: { source: 'k', target: 'j' , func:'#39b3d7'}  },
        { data: { source: 'k', target: 'e', type: 'dashed', func: '#dc2c0f' } },
        { data: { source: 'k', target: 'g', type: 'dashed', func: '#dc2c0f' } },

        { data: { source: 'g', target: 'j' , func:'#39b3d7' } }
      ],
    },

    ready: function(){
      cy = this;
    }
  };

  $('#cy').cytoscape(options);

});
	</script>
	</body>

</html>