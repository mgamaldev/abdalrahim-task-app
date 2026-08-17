# Self-Review Checklist

1. Every requirement in the exercise prompt matches the code line by line — especially getter/method names (e.g. `id()` not `getId()`).
2. No leftover debug output (`var_dump`, `print_r`, stray `echo`).
3. No commented-out code from earlier attempts.
4. `require` vs `require_once` used correctly — `require_once` for definition files, `require` for files that return a value.
5. `try/catch` present wherever the exercise explicitly asks for exception handling.
6. Output matches exactly what was asked — not more fields, not fewer.
7. No unrelated files in the diff, and the PR title matches everything the diff actually does.
8. Code runs locally before pushing.