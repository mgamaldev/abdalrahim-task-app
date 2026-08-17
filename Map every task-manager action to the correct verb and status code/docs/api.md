# Task Manager API Design

## Endpoints

| Action | Method | Path | Success status | Failure statuses |
|--------|--------|------|-----------------|-------------------|
| List all tasks | GET | `/tasks` | 200 | 401 (no token) |
| Show one task | GET | `/tasks/{id}` | 200 | 404 (task does not exist), 401 (no token) |
| Create a task | POST | `/tasks` | 201 | 422 (title empty / invalid data), 401 (no token) |
| Replace a task | PUT | `/tasks/{id}` | 200 | 404 (task does not exist), 422 (invalid data), 401 (no token) |
| Mark a task done | PATCH | `/tasks/{id}` | 200 | 404 (task does not exist), 422 (invalid value for `done`), 401 (no token) |
| Delete a task | DELETE | `/tasks/{id}` | 204 | 404 (task does not exist), 401 (no token) |
| List one assignee's tasks | GET | `/tasks?assignee={name}` | 200 | 401 (no token) |

## Rules

- **201 instead of 200**: return `201` only when a brand-new resource now exists (`POST`); every other successful action returns `200` because it reads or modifies something that already existed.
- **204**: return `204` with an empty body when the action succeeds and there is nothing left to describe — this is `DELETE`'s normal response.
- **400 vs 422**: `400` means the request itself couldn't be parsed (malformed JSON, broken syntax); `422` means the request parsed fine but the data breaks a validation rule (e.g. empty title, invalid priority value).
- **401 vs 403**: `401` means the server doesn't know who's calling (no or invalid token); `403` means the server knows exactly who's calling and that identity still isn't allowed to do this.