# Smart Marketing - Migração para PrestaShop v9

## Resumo das Mudanças

Este documento descreve as principais mudanças implementadas para tornar o plugin Smart Marketing compatível com PrestaShop v9.

### Versão
- **Versão anterior**: 3.1.4 (PrestaShop v8)
- **Nova versão**: 3.2.0 (PrestaShop v9 compatível)

### Principais Alterações

#### 1. Compatibilidade de Versão
- Atualizada declaração `ps_versions_compliancy` para suportar até v9.0.99
- Adicionada função `checkPrestashopVersion()` para verificações de compatibilidade

#### 2. Hooks Atualizados
- Corrigido hook malformado: `hookActionObjectProductAddAfter` → `actionObjectProductAddAfter`
- Adicionados novos hooks para v9:
  - `displayBackOfficeHeader`
  - `actionFrontControllerSetMedia`

#### 3. Templates
- Templates Smarty (.tpl) mantidos para compatibilidade
- Sistema continua funcional no v9 sem necessidade de migração para Twig

#### 4. APIs e Classes
- Todas as APIs principais mantidas (Tools, Db, Configuration, Context)
- Queries SQL compatíveis com MySQL 8.0+ (ONLY_FULL_GROUP_BY)
- Verificações de cache otimizadas para v9

#### 5. Arquivo de Upgrade
- Criado `upgrade/upgrade-3.2.0.php` para migração automática
- Registro de novos hooks durante upgrade
- Limpeza de cache automática

### Funcionalidades Testadas

✅ **Compatibilidade básica** - Plugin carrega sem erros
✅ **Hooks fundamentais** - Eventos continuam funcionando
✅ **Templates** - Interface administrativa funcional
✅ **Database** - Queries compatíveis com MySQL 8.0+
✅ **APIs** - Todas as chamadas principais funcionam

### Instalação

1. Faça backup do plugin atual
2. Substitua os arquivos pela nova versão
3. Acesse Admin → Módulos → Smart Marketing
4. O upgrade será executado automaticamente

### Notas Importantes

- Plugin mantém compatibilidade com PrestaShop 1.7+
- Sem breaking changes para funcionalidades existentes
- Todas as configurações e dados são preservados
- Sistema de templates Smarty continua suportado no v9

### Suporte

Para problemas ou dúvidas sobre a migração, contacte:
- E-mail: integrations@e-goi.com
- Documentação: [E-goi Integration Docs]