<?hh // strict

namespace Hack\UserDocumentation\AsyncOps\Guidelines\Examples\ForgetAwait;

async function speak(): Awaitable<void> {
  echo "one";
  await \HH\Asio\later();
  echo "two";
  echo "three";
}

<<__EntryPoint>>
async function forget_await(): Awaitable<void> {
  \init_docs_autoloader();
  $handle = speak(); // This just gets you the handle
}
