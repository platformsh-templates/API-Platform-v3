# Mercure Platform.sh Template

Mercure is an open protocol for real-time communications designed to be fast, reliable and battery-efficient. It is a modern and convenient replacement for both the Websocket API and the higher-level libraries and services relying on it.

Mercure is especially useful to add streaming capabilities to REST and GraphQL APIs. Because it is a thin layer on top of HTTP and SSE, Mercure is natively supported by modern web browsers, mobile applications and IoT devices.

See https://mercure.rocks.

<a href="https://console.platform.sh/projects/create-project/?template=https://github.com/platformsh/mercure-rocks-example&utm_campaign=deploy_on_platform?utm_medium=button&utm_source=affiliate_links&utm_content=https://github.com/platformsh/mercure-rocks-example" target="_blank" title="Deploy with Platform.sh"><img src="https://platform.sh/images/deploy/deploy-button-lg-blue.svg"></a>

Make sure you change in `.platform/applications.yaml`

```
JWT_KEY: "!ChangeMe!"
DEMO: 1
```

You should also remove the `public` directory, that is not needed for production.

### Kafka-specific Environment Variables

* `KAFKA_ADDRS`: Addresses of the Kafka servers, separated by a comma (ex: `host1:9092,host2:9092`)
* `KAFKA_TOPIC`: the name of the Kafka topic to use (ex: `mercure`)
* `KAFKA_CONSUMER_GROUP`: consumer group, must be different for every nodes
* `KAFKA_USER`: Kafka SASL user (optional)
* `KAFKA_PASSWORD`: Kafka SASL password (optional)
* `KAFKA_TLS`: Enable TLS (default to `0`)

## Copyright

For Mercure: [Kévin Dunglas](https://dunglas.fr), all rights reserved.
