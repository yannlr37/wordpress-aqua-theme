<?php 
include_once 'wordpress.php';
get_header(); 
?>
<div id="wrapper">
	<div id="page-content">
        <article>

            <h2>Style Guide</h2>
            <span class="post-date">3/01/2022</span>
            <span class="post-author">Yannick LA ROSA</span>

            <p>
                <h3>Code :</h3>

                <pre class="brush: php">
    function code()
    {
        echo "what's that shit man ?";
    }
                </pre>
            </p>

            <p>
                <h3>Buttons :</h3>
                <button>Apply</button>
            </p>

            <p>
                <h3>Text :</h3>
                Je constate que le monde numérique est plutôt hétéroclite. Comme on dit : il faut de tout pour faire un monde. Il y a des applications très modernes, plutôt complexes, construites sur des technologies et des outils récents. Et il y a des applications basées sur des technologies anciennes et outils anciens, pas toujours en accord avec la manière actuelle de faire les choses.
            </p>

            <p>
                <h3>Table :</h3>
                <table>
                    <thead>
                        <tr>
                            <th>name</th>
                            <th>age</th>
                            <th>modification</th>    
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </p>

            <p>
                Je vois des applications se vendre à prix d’or alors qu’il leur manque la moitié de leurs fonctionnalités. Des fonctionnalités qui feraient d’elles des « must have » incontournables. Les éditeurs qui les proposent en retirent de gros bénéfices en comparaison du travail réalisé.
Je vois des clients avec peu de moyens se faire proposer des plugins mal conçus et à moitié terminés. Pourtant, ces clients paient ces développeurs et utilisent ces plugins.                
            </p>

            <p>
                Finalement, tout est vendable, même le plus pourri des outils … du moment qu’il répond à un besoin. Celui qui conçoit un outil utile, joli et bien conçu n’aura aucun mal à le vendre et à en tirer des bénéfices.
            </p>

        </article>
	</div>
</div>
<?php get_footer(); ?>