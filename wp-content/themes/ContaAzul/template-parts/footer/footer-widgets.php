<?php
/**
 * Displays the footer widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

<div class="page-itens">
	<div class="cards">
		<div class="card-item">
			<img src="https://localhost/wordpress/wordpress/wp-content/themes/ContaAzul/template-parts/footer/imgs/contasapagar.svg" alt="">
			<h4>Contas a pagar e a receber</h4>
			<span>Mantenha as contas a pagar e a receber sempre atualizadas.</span>
		</div>
		<div class="card-item">
			<img src="https://localhost/wordpress/wordpress/wp-content/themes/ContaAzul/template-parts/footer/imgs/notafiscal.svg" alt="">
			<h4>CNota fiscal de produto e serviço</h4>
			<span>Emissor de nota fiscal integrado com o processo de vendas.</span>
		</div>
		<div class="card-item">
			<img src="https://localhost/wordpress/wordpress/wp-content/themes/ContaAzul/template-parts/footer/imgs/boleto.svg" alt="">
			<h4>Boleto de cobrança</h4>
			<span>Emita e envie boletos registrados para os clientes em poucos segundos.</span>
		</div>
		<div class="card-item">
			<img src="https://localhost/wordpress/wordpress/wp-content/themes/ContaAzul/template-parts/footer/imgs/fluxodecaixa.svg" alt="">
			<h4>Fluco de caixa diario e mensal</h4>
			<span>Movimentações de entradas e saidas, geração de caixa e o saldo do caixa por periodo.</span>
		</div>
		<div class="card-item">
			<img src="https://localhost/wordpress/wordpress/wp-content/themes/ContaAzul/template-parts/footer/imgs/integracao_bancaria.svg" alt="">
			<h4>Integração bancaria</h4>
			<span>A integração bancaria sincroniza lançamentos do ContaAzul com o seu banco.</span>
		</div>
		<div class="card-item">
			<img src="https://localhost/wordpress/wordpress/wp-content/themes/ContaAzul/template-parts/footer/imgs/integracao_contabil.svg" alt="">
			<h4>Integração contábil</h4>
			<span>Gaste menos tempo com a burocracia contabil.<br> Envie seus documentos digitalmente e interaja de forma agil com o contador.</span>
		</div>
		<div class="card-item">
			<img src="https://localhost/wordpress/wordpress/wp-content/themes/ContaAzul/template-parts/footer/imgs/conciliacao.svg" alt="">
			<h4>Conciliação bancaria</h4>
			<span>Economize até 20h por mês com a Conciliação Bancária do ContaAzul.</span>
		</div>
		<div class="card-item">
			<img src="https://localhost/wordpress/wordpress/wp-content/themes/ContaAzul/template-parts/footer/imgs/faturamentoporcliente.svg" alt="">
			<h4>Faturamento por cliente</h4>
			<span>A integração bancária sincroniza lançamentos do ContaAzul com o seu banco.</span>
		</div>
		<div class="card-item">
			<img src="https://localhost/wordpress/wordpress/wp-content/themes/ContaAzul/template-parts/footer/imgs/dre.svg" alt="">
			<h4>DRE gerencial</h4>
			<span>Relátorio de receitas, custos e despesas para entender a saúde financeira da empresa.</span>
		</div>

	</div>

</div>
<style>
	.page-itens{
		/* border: 1px solid red; */
		width: 100%;
		height: 100%;
		display: flex;
		justify-content: center;
		align-items: center;
		
	}
	.cards{
		/* border: 1px solid black; */
		width: 90%;
		height: 96%;
		/* padding: 15px; */
		display: flex;
		flex-wrap: wrap;
		justify-content: center;
		/* align-items: center; */
	}

	.card-item{
		/* border: 1px solid red; */
		width: 390px;
		height: 300px;
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		text-align: center;
		/* margin-left: 5%; */
		/* margin-bottom: 5%; */
		margin: 0px 16px;
	}

	.card-item span{
		font-size: 16px;
	}


/* @media only screen and (max-width: 1300px) {
	.page-itens{
		width: 100%;
		height: 100%;
		
	}
} */
</style>
<?php endif; ?>