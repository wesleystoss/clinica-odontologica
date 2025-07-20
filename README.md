# Site Odontológico - Guia de Manutenção

Este documento tem como objetivo orientar sobre a manutenção do site odontológico, incluindo como alterar imagens do carrossel, editar textos e realizar outras tarefas comuns.

## Estrutura do Projeto

- `app/` - Código-fonte principal (Controllers, Models, Views)
- `public/` - Arquivos públicos acessíveis pelo navegador
  - `img/` - Imagens do site
    - `carrousel/` - Imagens do carrossel da página inicial
    - `perfis/` - Fotos de perfis
  - `index.php` - Arquivo principal de entrada do site

## Como rodar o site localmente

1. Certifique-se de ter o PHP instalado (versão 7.4 ou superior).
2. No terminal, navegue até a pasta do projeto.
3. Execute o comando:
   ```bash
   php -S localhost:8000 -t public
   ```
4. Acesse `http://localhost:8000` no navegador.

## Como alterar o carrossel de imagens

1. As imagens do carrossel estão na pasta `public/img/carrousel/`.
2. Para **adicionar** uma nova imagem ao carrossel:
   - Coloque a nova imagem (formato `.jpg` ou `.png`) na pasta `carrousel`.
   - Certifique-se de que o nome do arquivo não conflita com outros já existentes.
   - Atualize o código da view (`app/Views/home.php`) se necessário, para incluir a nova imagem no carrossel.
3. Para **remover** uma imagem:
   - Apague o arquivo correspondente da pasta `carrousel`.
   - Remova ou ajuste a referência à imagem no código da view (`home.php`).
4. Para **alterar** uma imagem:
   - Substitua o arquivo na pasta `carrousel` mantendo o mesmo nome, ou
   - Altere o nome e atualize a referência no código da view.

## Como editar textos e páginas

- Os textos das páginas estão principalmente em `app/Views/`.
- Para editar o conteúdo da página inicial, abra `app/Views/home.php` e faça as alterações desejadas.
- Para criar novas páginas, siga o padrão dos arquivos existentes em `Views` e registre a rota correspondente em `app/Core/Router.php`.

## Dicas Gerais de Manutenção

- Sempre faça backup dos arquivos antes de realizar alterações importantes.
- Mantenha as imagens otimizadas para web (tamanho e resolução adequados).
- Após alterações, recarregue o site e teste as funcionalidades.

---

Em caso de dúvidas ou problemas, consulte o desenvolvedor responsável ou a documentação do framework utilizado. 