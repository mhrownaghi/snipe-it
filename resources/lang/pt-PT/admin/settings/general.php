<?php

return [
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Dominio do Active Directory',
    'ad_domain_help'			=> 'Em alguns casos isto e o mesmo que o dominio de email, mas nem sempre.',
    'ad_append_domain_label'    => 'Acrescentar nome de domínio',
    'ad_append_domain'          => 'Acrescentar nome de domínio ao campo de usuário',
    'ad_append_domain_help'     => 'O utilizador não tem que escrever "username@domain.local", pode apenas digitar "username".',
    'admin_cc_email'            => 'E-mail em CC',
    'admin_cc_email_help'       => 'Se prefere que seja enviada uma cópia do e-mail de checkin/checktout que é enviado aos utilizadores para uma conta de e-mail adicional, introduza o endereço de e-mail aqui. Caso contrário, deixe este campo em branco.',
    'is_ad'				        => 'Isto é um servidor do Active Directoriy',
    'alert_email'				=> 'Enviar alertas para',
    'alerts_enabled'			=> 'Alertas ativos',
    'alert_interval'			=> 'Alertas expiram (em dias)',
    'alert_inv_threshold'		=> 'Alerta limite do inventário',
    'allow_user_skin'           => 'Allow user skin',
    'allow_user_skin_help_text' => 'Checking this box will allow a user to override the UI skin with a different one.',
    'asset_ids'					=> 'IDs dos Artigos',
    'audit_interval'            => 'Intervalo de auditoria',
    'audit_interval_help'       => 'Se você for obrigado a auditar fisicamente seus ativos, insira o intervalo em meses.',
    'audit_warning_days'        => 'Limiar de aviso de auditoria',
    'audit_warning_days_help'   => 'Quantos dias de antecedência devemos avisar quando os ativos são devidos para a auditoria?',
    'auto_increment_assets'		=> 'Gerar IDs de artigos auto-incrementais',
    'auto_increment_prefix'		=> 'Prefixo (opcional)',
    'auto_incrementing_help'    => 'Ative IDs auto-incrementais antes da configuração',
    'backups'					=> 'Cópias de segurança',
    'barcode_settings'			=> 'Definições de Código de Barras',
    'confirm_purge'			    => 'Confirmar remoção',
    'confirm_purge_help'		=> 'Digite o texto "DELETE" na caixa abaixo para limpar seus registros excluídos. Essa ação não pode ser desfeita e irá excluir todos os itens e usuários excluídos por soft-delete. (Você deve fazer um backup primeiro, apenas para estar seguro.)',
    'custom_css'				=> 'CSS Personalizado',
    'custom_css_help'			=> 'Insira o CSS personalizado que deseja utilizar. Não use as tags <style></style>.',
    'custom_forgot_pass_url'	=> 'Endereço de redefinição de palavra-passe personalizado',
    'custom_forgot_pass_url_help'	=> 'Isto substitui o endereço de recuperação de palavra-passe que vem configurado por defeito na página de login, útil para direcionar utilizadores para o serviço de recuperação de palavras-passe da LDAP interna ou alojada. Vai efetivamente desabilitar a funcionalidade de "palavra-passe esquecida" do utilizador local.',
    'dashboard_message'			=> 'Mensagem do painel de controle',
    'dashboard_message_help'	=> 'Este texto aparecerá no painel de controle, para qualquer utilizador que tenha permissões para ver o painel de controle.',
    'default_currency'  		=> 'Moeda padrão',
    'default_eula_text'			=> 'EULA padrão',
    'default_language'			=> 'Idioma predefinido',
    'default_eula_help_text'	=> 'Também pode associar EULAs personalizados para categorias de artigos especificas.',
    'display_asset_name'        => 'Mostrar Nome do Artigo',
    'display_checkout_date'     => 'Mostrar Data de Alocação',
    'display_eol'               => 'Mostrar EOL na tabela',
    'display_qr'                => 'Mostrar códigos Qr',
    'display_alt_barcode'		=> 'Mostrar codigos de barra 1D',
    'email_logo'                => 'Logotipo do e-mail',
    'barcode_type'				=> 'Tipo de código de barras 2D',
    'alt_barcode_type'			=> 'Tipo de código de barras 1D',
    'email_logo_size'       => 'Logos quadrados no e-mail são os melhores. ',
    'eula_settings'				=> 'Definições de EULA',
    'eula_markdown'				=> 'Este EULA permite <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>.',
    'favicon'                   => 'Ícone de Favoritos',
    'favicon_format'            => 'Os tipos de arquivos aceites são ico, png e gif. Outros formatos de imagem podem não funcionar em todos os navegadores.',
    'favicon_size'          => 'Favicons devem ser imagens quadradas, 16x16 pixels.',
    'footer_text'               => 'Texto de rodapé adicional',
    'footer_text_help'          => 'Este texto aparecerá no lado direito do rodapé. São permitidos o uso de hiperligações, utilizando <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>. O uso de quebras de linha, cabeçalhos, imagens, etc... podem ter resultados imprevisíveis. ',
    'general_settings'			=> 'Configurações Gerais',
    'generate_backup'			=> 'Gerar Backup',
    'header_color'              => 'Cor do cabeçalho',
    'info'                      => 'Estas configurações permitem costumizar certos aspetos desta instalação.',
    'label_logo'                => 'Logotipo da etiqueta',
    'label_logo_size'           => 'Square logos look best - will be displayed in the top right of each asset label. ',
    'laravel'                   => 'Versão do Laravel',
    'ldap_client_tls_cert'      => 'LDAP Client-Side TLS Certificate',
    'ldap_enabled'              => 'LDAP ativo',
    'ldap_integration'          => 'Integração LDAP',
    'ldap_settings'             => 'Configurações LDAP',
    'ldap_client_tls_cert_help' => 'Client-Side TLS Certificate and Key for LDAP connections are usually only useful in Google Workspace configurations with "Secure LDAP." Both are required.',
     'ldap_client_tls_key'       => 'LDAP Client-Side TLS key',
    'ldap_login_test_help'      => 'Introduza um utilizador e palavra-passe da LDAP válido pertencente ao DN que especificou acima +ara testar se a sua autenticação da LDAP foi configurada corretamente, PRIMEIRO DEVE GRAVAR AS SUAS DEFINIÇÕES ATUALIZADAS DA LDAP.',
    'ldap_login_sync_help'      => 'Isto apenas testa que a LDAP consegue sincronizar corretamente. Se a sua consulta de autenticação LDAP não estiver correta, os utilizadores poderão ainda não conseguir fazer a autenticação. PRIMEIRO DEVE GRAVAR AS SUAS DEFINIÇÕES ATUALIZADAS DA LDAP.',
    'ldap_server'               => 'Servidor LDAP',
    'ldap_server_help'          => 'Isso deve começar com ldap: / / (para não-criptado ou TLS) ou ldaps: / / (para SSL)',
    'ldap_server_cert'			=> 'Validação certificado SSL LDAP',
    'ldap_server_cert_ignore'	=> 'Permitir certificado SSL inválido',
    'ldap_server_cert_help'		=> 'Seleccione esta opção se está a usar um certificado SSL auto-assinado e desejar aceitar um certificado SSL inválido.',
    'ldap_tls'                  => 'Usar TLS',
    'ldap_tls_help'             => 'Isto só deve ser escolhido se estiver a correr STARTTLS no seu servidor LDAP. ',
    'ldap_uname'                => 'Utilizador bind LDAP',
    'ldap_dept'                 => 'LDAP Department',
    'ldap_phone'                => 'LDAP Telephone Number',
    'ldap_jobtitle'             => 'LDAP Job Title',
    'ldap_country'              => 'LDAP Country',
    'ldap_pword'                => 'Password bind LDAP',
    'ldap_basedn'               => 'Base bind DN',
    'ldap_filter'               => 'Filtro LDAP',
    'ldap_pw_sync'              => 'Sincronização de password LDAP',
    'ldap_pw_sync_help'         => 'Desmarque esta caixa se não deseja guardar as passwords LDAP com passwords locais. Ao desativar esta opção quer dizer que os utilizadores poderão não conseguir fazer login se o seu servidor LDAP não estiver disponível por alguma rasão.',
    'ldap_username_field'       => 'Campo nome de utilizador',
    'ldap_lname_field'          => 'Campo Último nome',
    'ldap_fname_field'          => 'Campo Primeiro nome',
    'ldap_auth_filter_query'    => 'Query de autenticação LDAP',
    'ldap_version'              => 'Versão de LDAP',
    'ldap_active_flag'          => 'Opção LDAP Activo',
    'ldap_activated_flag_help'  => 'This flag is used to determine whether a user can login to Snipe-IT and does not affect the ability to check items in or out to them.',
    'ldap_emp_num'              => 'Número funcionário LDAP',
    'ldap_email'                => 'Email LDAP',
    'license'                  => 'Licença de software',
    'load_remote_text'          => 'Scripts Remotos',
    'load_remote_help_text'		=> 'Esta instalação do Snipe-IT pode carregar scripts do mundo exterior.',
    'login_note'                => 'Login Note',
    'login_note_help'           => 'Opcionalmente, inclua algumas frases na tela de login, por exemplo, para ajudar as pessoas que encontraram um dispositivo perdido ou roubado. Este campo aceita <a href="https://help.github.com/articles/github-flavored-markdown/">Gitão com sabor marcado</a>',
    'login_remote_user_text'    => 'Opções de login remoto de utilizadores',
    'login_remote_user_enabled_text' => 'Ativar login com cabeçalho de utilizador remoto',
    'login_remote_user_enabled_help' => 'Esta opção habilita a Autenticação via cabeçalho REMOTE_USER de acordo com a "Common Gateway Interface (rfc3875)"',
    'login_common_disabled_text' => 'Desabilitar outros mecanismos de autenticação',
    'login_common_disabled_help' => 'Esta opção desativa outros mecanismos de autenticação. Ative apenas esta opção caso tenha a certeza de que seu REMOTE_USER já se encontra a funcionar',
    'login_remote_user_custom_logout_url_text' => 'URL de logout personalizado',
    'login_remote_user_custom_logout_url_help' => 'Se preenchido, os utilizadores serão redirecionados para este URL depois de fecharem a sessão no SnipeIT. É particularmente útil para fechar corretamente a sessão do utilizador do fornecedor de autenticação.',
    'login_remote_user_header_name_text' => 'Custom user name header',
    'login_remote_user_header_name_help' => 'Use the specified header instead of REMOTE_USER',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => 'Usar na impressão',
    'logo_print_assets_help'    => 'Usar a marca na impressão de lista de ativos ',
    'full_multiple_companies_support_help_text' => 'Restringir utilizadores (incluindo admins) associados a empresas ao ativos da empresa.',
    'full_multiple_companies_support_text' => 'Suporte multi-empresa completo',
    'show_in_model_list'   => 'Mostrar modelos em menu de cascata',
    'optional'					=> 'opcional',
    'per_page'                  => 'Resultados por página',
    'php'                       => 'Versão do PHP',
    'php_gd_info'               => 'Deve instalar a extensão php-gd para mostrar códigos QR, veja as instruções de instalação.',
    'php_gd_warning'            => 'O Processamento de Imagem PHP e o plugin GD não estão instalados.',
    'pwd_secure_complexity'     => 'Complexidade de senha',
    'pwd_secure_complexity_help' => 'Selecione as regras de complexidade de senha que você deseja aplicar.',
    'pwd_secure_min'            => 'Senha mínima',
    'pwd_secure_min_help'       => 'Minimum permitted value is 8',
    'pwd_secure_uncommon'       => 'Prevenir senhas comuns',
    'pwd_secure_uncommon_help'  => 'Isso impedirá os usuários de usar senhas comuns das 10 senhas superiores registradas em brechas.',
    'qr_help'                   => 'Ative os códigos QR antes da configuração',
    'qr_text'                   => 'Texto do Código QR',
    'saml_enabled'              => 'SAML enabled',
    'saml_integration'          => 'SAML Integration',
    'saml_sp_entityid'          => 'Entity ID',
    'saml_sp_acs_url'           => 'Assertion Consumer Service (ACS) URL',
    'saml_sp_sls_url'           => 'Single Logout Service (SLS) URL',
    'saml_sp_x509cert'          => 'Public Certificate',
    'saml_sp_metadata_url'      => 'Metadata URL',
    'saml_idp_metadata'         => 'SAML IdP Metadata',
    'saml_idp_metadata_help'    => 'You can specify the IdP metadata using a URL or XML file.',
    'saml_attr_mapping_username' => 'Attribute Mapping - Username',
    'saml_attr_mapping_username_help' => 'NameID will be used if attribute mapping is unspecified or invalid.',
    'saml_forcelogin_label'     => 'SAML Force Login',
    'saml_forcelogin'           => 'Make SAML the primary login',
    'saml_forcelogin_help'      => 'You can use \'/login?nosaml\' to get to the normal login page.',
    'saml_slo_label'            => 'SAML Single Log Out',
    'saml_slo'                  => 'Send a LogoutRequest to IdP on Logout',
    'saml_slo_help'             => 'This will cause the user to be first redirected to the IdP on logout. Leave unchecked if the IdP doesn\'t correctly support SP-initiated SAML SLO.',
    'saml_custom_settings'      => 'SAML Custom Settings',
    'saml_custom_settings_help' => 'You can specify additional settings to the onelogin/php-saml library. Use at your own risk.',
    'setting'                   => 'Configuração',
    'settings'                  => 'Configurações',
    'show_alerts_in_menu'       => 'Mostrar alertas no topo do menu',
    'show_archived_in_list'     => 'Artigos arquivados',
    'show_archived_in_list_text'     => 'Mostrar artigos arquivados na lista "todos os artigos"',
    'show_assigned_assets'      => 'Show assets assigned to assets',
    'show_assigned_assets_help' => 'Display assets which were assigned to the other assets in View User -> Assets, View User -> Info -> Print All Assigned and in Account -> View Assigned Assets.',
    'show_images_in_email'     => 'Mostrar imagens em e-mails',
    'show_images_in_email_help'   => 'Desmarque esta caixa se a sua instalação do Snipe-IT estiver a correr através de uma VPN ou rede fechada e utilizadores fora da rede não conseguirem carregar as imagens desta instalação nos seus e-mails.',
    'site_name'                 => 'Nome do site',
    'slack_botname'             => 'Botname Slack',
    'slack_channel'             => 'Canal Slack',
    'slack_endpoint'            => 'Endpoint Slack',
    'slack_integration'         => 'Definições Slack',
    'slack_integration_help'    => 'Slack integration is optional, however the endpoint and channel are required if you wish to use it. To configure Slack integration, you must first <a href=":slack_link" target="_new" rel="noopener">create an incoming webhook</a> on your Slack account. Click on the <strong>Test Slack Integration</strong> button to confirm your settings are correct before saving. ',
    'slack_integration_help_button'    => 'Uma vez gravadas as suas informações do Slack, aparecerá um botão de teste.',
    'slack_test_help'           => 'Teste se sua integração do Slack está configurada corretamente. DEVE PRIMEIRO GRAVAR AS SUAS CONFIGURAÇÕES ACTUALIZADAS.',
    'snipe_version'  			=> 'Versão Snipe-IT',
    'support_footer'            => 'Links de rodapé de suporte',
    'support_footer_help'       => 'Especifica quem vê os links de Suporte e Manual de utilizador do Snipe-IT',
    'version_footer'            => 'Versão no Rodapé ',
    'version_footer_help'       => 'Especifica quem vê o número de versão e compilação do Snipe-lT.',
    'system'                    => 'Informação de Sistema',
    'update'                    => 'Atualizar Configurações',
    'value'                     => 'Valor',
    'brand'                     => 'Branding',
    'web_brand'                 => 'Web Branding Type',
    'about_settings_title'      => 'Sobre as Configurações',
    'about_settings_text'       => 'Estas configurações permitem-lhe customizar determinados aspetos da sua instalação.',
    'labels_per_page'           => 'Etiquetas por página',
    'label_dimensions'          => 'Dimensões das etiquetas (inches)',
    'next_auto_tag_base'        => 'Próximo incremento automático',
    'page_padding'              => 'Margens da pagina (inches)',
    'privacy_policy_link'       => 'Link para a Política de Privacidade',
    'privacy_policy'            => 'Política de Privacidade',
    'privacy_policy_link_help'  => 'Se um URL for incluído aqui, um link para as suas políticas de privacidade será incluído no rodapé da aplicação e em todos os emails que o sistema enviar, em conformidade com o GDPR. ',
    'purge'                     => 'Remover registos apagados',
    'labels_display_bgutter'    => 'Margem inferior da etiqueta',
    'labels_display_sgutter'    => 'Margem lateral da Etiqueta',
    'labels_fontsize'           => 'Tamanho do texto da etiqueta',
    'labels_pagewidth'          => 'Largura da folha de etiquetas',
    'labels_pageheight'         => 'Altura da folha de etiquetas',
    'label_gutters'        => 'Espaçamento entre etiquetas (inches)',
    'page_dimensions'        => 'Dimensões da pagina (inches)',
    'label_fields'          => 'Campos visiveis nas etiquetas',
    'inches'        => 'inches',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Link para Snipe-IT em E-mails',
    'show_url_in_emails_help_text'      => 'Desmarque esta caixa se não deseja vincular novamente a sua instalação Snipe-IT em seus rodapés de e-mail. Útil se a maioria de seus usuários nunca logar.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Altura máxima da miniatura',
    'thumbnail_max_h_help'   => 'Altura máxima em pixels que as miniaturas podem exibir na visualização de listagem. Min 25, max 500.',
    'two_factor'        => 'Autenticação em dois passos',
    'two_factor_secret'        => 'Código de autenticação em dois passos',
    'two_factor_enrollment'        => 'Ativação de autenticação em dois passos',
    'two_factor_enabled_text'        => 'Ativar autenticação em dois passos',
    'two_factor_reset'        => 'Redefinir password autenticação de pois passos',
    'two_factor_reset_help'        => 'Isto irá forçar o usuário a registar o seu dispositivo com Google Authenticator novamente. Isso pode ser útil se seu dispositivo actualmente registado for perdido ou roubado. ',
    'two_factor_reset_success'          => 'Dispositivo de autenticação de dois passos foi redefinido com sucesso',
    'two_factor_reset_error'          => 'Reset do dispositivo de autenticação de dois passos falhou',
    'two_factor_enabled_warning'        => 'Ao activar a autenticação de dois passos se não estiver já ativado, irá forçar-te a autenticar com o Google Auth com um dispositivo registado.',
    'two_factor_enabled_help'        => 'Isso irá activar a autenticação de dois passos usando Google Authenticator.',
    'two_factor_optional'        => 'Selectivo (os usuários podem activar ou desactivar se permitido)',
    'two_factor_required'        => 'Obrigatório para todos os utilizadores',
    'two_factor_disabled'        => 'Desactivado',
    'two_factor_enter_code'	=> 'Digite o código de autenticação de pois passos',
    'two_factor_config_complete'	=> 'Enviar codigo',
    'two_factor_enabled_edit_not_allowed' => 'O teu administrador não permite editar esta opção.',
    'two_factor_enrollment_text'	=> 'A autenticação de dois passos é obrigatória, mas se o teu dispositivo ainda não foi registado, abre o Google Authenticator e lê o QR Code para registar o teu dispositivo. Uma vez registado, introduz o código abaixo',
    'require_accept_signature'      => 'Requer assinatura',
    'require_accept_signature_help_text'      => 'Habilitar este recurso vai exigir que os utilizadores assinar fisicamente aceitando o artigo.',
    'left'        => 'esquerda',
    'right'        => 'direita',
    'top'        => 'topo',
    'bottom'        => 'fundo',
    'vertical'        => 'vertical',
    'horizontal'        => 'horizontal',
    'unique_serial'                => 'Números de série únicos',
    'unique_serial_help_text'                => 'Marcar esta caixa para garantir que os números de série são únicos',
    'zerofill_count'        => 'Comprimento de tags de artigos, incluindo zerofill',
    'username_format_help'   => 'This setting will only be used by the import process if a username is not provided and we have to generate a username for you.',
];
