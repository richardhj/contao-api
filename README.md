# contao-api

This is my personal playground for a prototypical Contao API.

In the beginning, it aims to provide a Content API, so Contao exposes its articles, navigation modules etc. to be used in static site generator. I became a big fan of Gridsome lately ;-)

My personal motivation is to contribute to a Contao API that is part of the Contao core. This will make it possible to use Contao as a headless CMS one day 🚀

This project uses Symfony API platform. But that's only because of rapid prototyping.

## Notes

- Use the existing backend user permissions -> JWT authentication
- Add authentication via API key - maybe new user entity? -> great for Content API consumers
- Webhooks -> when content changed, then trigger POST request

## Install

```yaml
# /config/config.yml
api_platform:
  mapping:
    paths: [ '%kernel.project_dir%/vendor/richardhj/contao-api/src/Resource' ]
```

```yaml
# /config/routes.yml
api_platform:
  resource: .
  type: api_platform
  prefix: /api
```
