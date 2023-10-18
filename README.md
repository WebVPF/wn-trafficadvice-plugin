# Traffic Advice

A plugin for Winter CMS that adds to the site the page `/.well-known/traffic-advice` with a JSON response containing instructions for preloading the site in the Chrome browser when it appears in Google search.

## Installation Сomposer:

```bash
composer require webvpf/wn-trafficadvice-plugin
```

## For what

If your site has search traffic from Google, then by turning on “Save failed requests” in the settings, you will see that your site receives a large number of requests for the address `https://example.com/.well-known/traffic-advice`

This is a Google proxy server that requests instructions for preloading the site, so that when the user leaves the search, the site page loads as quickly as possible.

Instead of instructions, the Google proxy server receives a 404 error, and Winter CMS records an error log (if enabled in the settings).

<a href="https://user-images.githubusercontent.com/61043464/276033359-822a875d-1f3d-4126-ab78-d2b68156e673.jpg" target="_blank" alt="log errors"><img src="https://user-images.githubusercontent.com/61043464/276033285-20948c5a-2e65-424b-9a71-881392ecaf29.jpg"/>
</a> <a href="https://user-images.githubusercontent.com/61043464/276033421-5028c748-d54f-4a98-a6a2-4db952c28501.jpg" target="_blank" alt="log error"><img src="https://user-images.githubusercontent.com/61043464/276033317-fa67d326-d86a-4780-81e9-803e74ec2b28.jpg"/></a>

---

## Traffic control

You can use the traffic advice's `fraction` field to control how much traffic the Private Prefetch Proxy should let through. You can start with a small fraction such as 0.3 (that is, 30%), and gradually increase it to 1.0 (that is, 100%) by adding the following JSON to a `/.well-known/traffic-advice` file, which needs to be served with the `application/trafficadvice+json` MIME type:

```json
[{
  "user_agent": "prefetch-proxy",
  "fraction": 0.3
}]
```

The `fraction` field is a float between 0.0 (no prefetch at all) and 1.0 (100% of the prefetch requests get through).

It is also possible to disable this completely with the following configuration:

```json
[{
  "user_agent": "prefetch-proxy",
  "disallow": true
}]
```

---

See more details https://developer.chrome.com/blog/private-prefetch-proxy/#traffic
