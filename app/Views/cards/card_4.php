<div class="album">
    <div class="container">
        <h2 class="titulo-pagina">Manutenção e Testes</h2>
        <div class="row py-4" style="text-align: justify;">
            <div class="col-md-6">
                <div>
                    <h4>Testando as Adequações</h4>
                    <p>Adequar-se à LGPD significa adicionar privacidade e proteção de dados por padrão em seus processos de teste. Isso deve complementar os procedimentos existentes, como testes de penetração (<i>pentest</i>).</p>
                    <p>Tais procedimentos de teste de privacidade devem prever como usuários não autorizados obteriam acesso a dados no seu sistema. Para isso você precisa ter os seguintes questionamentos:</p>
                    <ul>
                        <li>Os dados de usuários são armazenados nos <i>cookies</i> de login?</li>
                        <li>Alguém poderia ter acesso aos dados acionando intencionalmente um erro?</li>
                        <li>Há alertas externos sobre violações de dados, potenciais ou reais?</li>
                        <li>A criptografia utilizada para informações pessoais foi a mais forte?</li>
                        <li><i>Logs</i> das aplicações não estão comprometendo a privacidade do usuário?</li>
                    </ul>
                    <p>Sendo assim, você precisa pensar de forma um tanto maliciosa a respeito de como seus dados podem escapar e onde eles não deveriam estar.</p>
                    <p>A regra de ouro da LGPD é documentar tudo. Se não está registrado então não aconteceu. Os resultados do seus testes e métodos usados para alcançá-los devem ser anotados e acionados como documentos vivos. Você precisará comprovar em situações extremas de vazamento que você utilizou a melhor tecnologia existente no período em que o desenvolvimento ou manutenção aconteceram.</p>
                </div>
                <div>
                
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <h4>O que todo desenvolvedor precisa ter em mente</h4>
                    <p>Um conceito importante ligado à LGPD é a finalidade da coleta de dados, ou seja, quando você fizer a coleta é necessário que ela tenha um objetivo específico e justificável. Isso não significa que você não possa coletar os dados que desejar, mas eles deverão apresentar uma razão bem definida. Isso sem contar que o usuário precisa ser notificado e concordar com a coleta. Uma boa dica é adicionar estas justificativas como um DoD (<i>Definition of Done</i>) da estória ou escopo de projeto à ser desenvolvido pelo time técnico.</p>
                    <p>Logo, como desenvolvedor, seja para entrar em conformidade com a LGPD ou o GDPR, é essencial que você tenha debates com o responsável pelo produto (<i>Product Owner</i>) e com parceiros sobre sua adequação às leis de proteção de dados, assim como conversar com outros desenvolvedores mais familiarizados com os códigos e arquitetura de seus sistemas. Procure compreender como eles processam, armazenam e manipulam os dados.</p>
                    <p>Ofereça uma API para gerenciar o consentimento do seu usuário e, principalmente, as versões do consentimento, dado que a solução digital é viva e pode, ao longo do tempo, solicitar ou utilizar os dados de maneira distinta da inicialmente proposta.</p>
                    <p>Lembre-se a privacidade dos dados necessita ser protegida a cada passo do usuário, do login ao logout.</p>
                    <p>No caso de APIs vale a pena ficar atento ao seu gerenciamento, afinal ele é a base para uma uma arquitetura compatível com a LGPD. O gerenciamento permite que as empresas criem rapidamente regras sobre obtenção de consentimento e assim informem seus usuários acerca de regulamentações ligadas ao acesso e a portabilidade de dados.</p>
                    <p>A partir da vigência da LGPD, será preciso que as organizações revejam o ciclo de vida de suas APIs e implementem controles mais rigorosos e robustos para a proteção dos dados.</p>
                 </div>
            </div>
        </div>
    </div>
</div>